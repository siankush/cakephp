<?php
declare(strict_types=1);

/**
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @copyright     Copyright (c) Brian Nesbitt <brian@nesbot.com>
 * @link          http://cakephp.org CakePHP(tm) Project
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
namespace Cake\Chronos\Traits;

use Cake\Chronos\ChronosInterface;
use DateTimeInterface;
use DateTimeZone;
use InvalidArgumentException;
use ReturnTypeWillChange;

/**
 * Provides a number of datetime related factory methods.
 */
trait FactoryTrait
{
    /**
     * Holds the last error generated by createFromFormat
     *
     * @var array
     */
    protected static $_lastErrors = [];

    /**
     * Create a ChronosInterface instance from a DateTimeInterface one
     *
     * @param \DateTimeInterface $dt The datetime instance to convert.
     * @return static
     */
    public static function instance(DateTimeInterface $dt): ChronosInterface
    {
        if ($dt instanceof static) {
            return clone $dt;
        }

        return new static($dt->format('Y-m-d H:i:s.u'), $dt->getTimezone());
    }

    /**
     * Create a ChronosInterface instance from a string.  This is an alias for the
     * constructor that allows better fluent syntax as it allows you to do
     * ChronosInterface::parse('Monday next week')->fn() rather than
     * (new Chronos('Monday next week'))->fn()
     *
     * @param \DateTimeInterface|string|int $time The strtotime compatible string to parse
     * @param \DateTimeZone|string|null $tz The DateTimeZone object or timezone name.
     * @return static
     */
    public static function parse($time = 'now', $tz = null): ChronosInterface
    {
        return new static($time, $tz);
    }

    /**
     * Get a ChronosInterface instance for the current date and time
     *
     * @param \DateTimeZone|string|null $tz The DateTimeZone object or timezone name.
     * @return static
     */
    public static function now($tz = null): ChronosInterface
    {
        return new static('now', $tz);
    }

    /**
     * Create a ChronosInterface instance for today
     *
     * @param \DateTimeZone|string|null $tz The timezone to use.
     * @return static
     */
    public static function today($tz = null): ChronosInterface
    {
        return new static('midnight', $tz);
    }

    /**
     * Create a ChronosInterface instance for tomorrow
     *
     * @param \DateTimeZone|string|null $tz The DateTimeZone object or timezone name the new instance should use.
     * @return static
     */
    public static function tomorrow($tz = null): ChronosInterface
    {
        return new static('tomorrow, midnight', $tz);
    }

    /**
     * Create a ChronosInterface instance for yesterday
     *
     * @param \DateTimeZone|string|null $tz The DateTimeZone object or timezone name the new instance should use.
     * @return static
     */
    public static function yesterday($tz = null): ChronosInterface
    {
        return new static('yesterday, midnight', $tz);
    }

    /**
     * Create a ChronosInterface instance for the greatest supported date.
     *
     * @return \Cake\Chronos\ChronosInterface
     */
    public static function maxValue(): ChronosInterface
    {
        return static::createFromTimestampUTC(PHP_INT_MAX);
    }

    /**
     * Create a ChronosInterface instance for the lowest supported date.
     *
     * @return \Cake\Chronos\ChronosInterface
     */
    public static function minValue(): ChronosInterface
    {
        $max = PHP_INT_SIZE === 4 ? PHP_INT_MAX : PHP_INT_MAX / 10;

        return static::createFromTimestampUTC(~$max);
    }

    /**
     * Create a new ChronosInterface instance from a specific date and time.
     *
     * If any of $year, $month or $day are set to null their now() values
     * will be used.
     *
     * If $hour is null it will be set to its now() value and the default values
     * for $minute, $second and $microsecond will be their now() values.
     * If $hour is not null then the default values for $minute, $second
     * and $microsecond will be 0.
     *
     * @param int|null $year The year to create an instance with.
     * @param int|null $month The month to create an instance with.
     * @param int|null $day The day to create an instance with.
     * @param int|null $hour The hour to create an instance with.
     * @param int|null $minute The minute to create an instance with.
     * @param int|null $second The second to create an instance with.
     * @param int|null $microsecond The microsecond to create an instance with.
     * @param \DateTimeZone|string|null $tz The DateTimeZone object or timezone name the new instance should use.
     * @return static
     */
    public static function create(
        ?int $year = null,
        ?int $month = null,
        ?int $day = null,
        ?int $hour = null,
        ?int $minute = null,
        ?int $second = null,
        ?int $microsecond = null,
        $tz = null
    ): ChronosInterface {
        $now = static::now();
        $year = $year ?? (int)$now->format('Y');
        $month = $month ?? $now->format('m');
        $day = $day ?? $now->format('d');

        if ($hour === null) {
            $hour = $now->format('H');
            $minute = $minute ?? $now->format('i');
            $second = $second ?? $now->format('s');
            $microsecond = $microsecond ?? $now->format('u');
        } else {
            $minute = $minute ?? 0;
            $second = $second ?? 0;
            $microsecond = $microsecond ?? 0;
        }

        $instance = static::createFromFormat(
            'Y-m-d H:i:s.u',
            sprintf('%s-%s-%s %s:%02s:%02s.%06s', 0, $month, $day, $hour, $minute, $second, $microsecond),
            $tz
        );

        return $instance->addYears($year);
    }

    /**
     * Create a ChronosInterface instance from just a date. The time portion is set to now.
     *
     * @param int|null $year The year to create an instance with.
     * @param int|null $month The month to create an instance with.
     * @param int|null $day The day to create an instance with.
     * @param \DateTimeZone|string|null $tz The DateTimeZone object or timezone name the new instance should use.
     * @return static
     */
    public static function createFromDate(
        ?int $year = null,
        ?int $month = null,
        ?int $day = null,
        $tz = null
    ): ChronosInterface {
        return static::create($year, $month, $day, null, null, null, null, $tz);
    }

    /**
     * Create a ChronosInterface instance from just a time. The date portion is set to today.
     *
     * @param int|null $hour The hour to create an instance with.
     * @param int|null $minute The minute to create an instance with.
     * @param int|null $second The second to create an instance with.
     * @param int|null $microsecond The microsecond to create an instance with.
     * @param \DateTimeZone|string|null $tz The DateTimeZone object or timezone name the new instance should use.
     * @return static
     */
    public static function createFromTime(
        ?int $hour = null,
        ?int $minute = null,
        ?int $second = null,
        ?int $microsecond = null,
        $tz = null
    ): ChronosInterface {
        return static::create(null, null, null, $hour, $minute, $second, $microsecond, $tz);
    }

    /**
     * Create a ChronosInterface instance from a specific format
     *
     * @param string $format The date() compatible format string.
     * @param string $time The formatted date string to interpret.
     * @param \DateTimeZone|string|null $tz The DateTimeZone object or timezone name the new instance should use.
     * @return static
     * @throws \InvalidArgumentException
     */
    #[ReturnTypeWillChange]
    public static function createFromFormat($format, $time, $tz = null): ChronosInterface
    {
        if ($tz !== null) {
            $dt = parent::createFromFormat($format, $time, static::safeCreateDateTimeZone($tz));
        } else {
            $dt = parent::createFromFormat($format, $time);
        }

        $errors = parent::getLastErrors();
        if (!$dt) {
            throw new InvalidArgumentException(implode(PHP_EOL, $errors['errors']));
        }

        $dt = new static($dt->format('Y-m-d H:i:s.u'), $dt->getTimezone());
        static::$_lastErrors = $errors;

        return $dt;
    }

    /**
     * Creates a ChronosInterface instance from an array of date and time values.
     *
     * The 'year', 'month' and 'day' values must all be set for a date. The time
     * values all default to 0.
     *
     * The 'timezone' value can be any format supported by `\DateTimeZone`.
     *
     * Allowed values:
     *  - year
     *  - month
     *  - day
     *  - hour
     *  - minute
     *  - second
     *  - microsecond
     *  - meridian ('am' or 'pm')
     *  - timezone
     *
     * @param (int|string)[] $values Array of date and time values.
     * @return static
     */
    public static function createFromArray(array $values): ChronosInterface
    {
        $values += ['hour' => 0, 'minute' => 0, 'second' => 0, 'microsecond' => 0, 'timezone' => null];

        $formatted = '';
        if (
            isset($values['year'], $values['month'], $values['day']) &&
            (
                is_numeric($values['year']) &&
                is_numeric($values['month']) &&
                is_numeric($values['day'])
            )
        ) {
            $formatted .= sprintf('%04d-%02d-%02d ', $values['year'], $values['month'], $values['day']);
        }

        if (isset($values['meridian']) && (int)$values['hour'] === 12) {
            $values['hour'] = 0;
        }
        if (isset($values['meridian'])) {
            $values['hour'] = strtolower($values['meridian']) === 'am' ? $values['hour'] : $values['hour'] + 12;
        }
        $formatted .= sprintf(
            '%02d:%02d:%02d.%06d',
            $values['hour'],
            $values['minute'],
            $values['second'],
            $values['microsecond']
        );

        return static::parse($formatted, $values['timezone']);
    }

    /**
     * Create a ChronosInterface instance from a timestamp
     *
     * @param int $timestamp The timestamp to create an instance from.
     * @param \DateTimeZone|string|null $tz The DateTimeZone object or timezone name the new instance should use.
     * @return static
     */
    public static function createFromTimestamp(int $timestamp, $tz = null): ChronosInterface
    {
        return static::now($tz)->setTimestamp($timestamp);
    }

    /**
     * Create a ChronosInterface instance from an UTC timestamp
     *
     * @param int $timestamp The UTC timestamp to create an instance from.
     * @return static
     */
    public static function createFromTimestampUTC(int $timestamp): ChronosInterface
    {
        return new static($timestamp);
    }

    /**
     * Creates a DateTimeZone from a string or a DateTimeZone
     *
     * @param \DateTimeZone|string|null $object The value to convert.
     * @return \DateTimeZone
     * @throws \InvalidArgumentException
     */
    protected static function safeCreateDateTimeZone($object): DateTimeZone
    {
        if ($object === null) {
            return new DateTimeZone(date_default_timezone_get());
        }

        if ($object instanceof DateTimeZone) {
            return $object;
        }

        return new DateTimeZone($object);
    }

    /**
     * Returns any errors or warnings that were found during the parsing
     * of the last object created by this class.
     *
     * @return array
     */
    public static function getLastErrors(): array
    {
        if (empty(static::$_lastErrors)) {
            return parent::getLastErrors();
        }

        return static::$_lastErrors;
    }
}
