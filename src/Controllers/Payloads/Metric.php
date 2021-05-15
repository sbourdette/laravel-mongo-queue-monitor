<?php

namespace sbourdette\MongoQueueMonitor\Controllers\Payloads;

final class Metric
{

    /**
     * @var float
     */
    public $value;

		/**
     * @var string
     */
    public $comment;

    /**
     * @var int
     */
    public $previousValue;

    /**
     * @var string
     */
    public $format;

    public function __construct(string $title, float $value = 0, string $comment = Null, int $previousValue = null, string $format = '%d')
    {
				$this->title = $title;
        $this->value = $value;
				$this->comment = $comment;
        $this->previousValue = $previousValue;
        $this->format = $format;
    }

    public function hasChanged(): bool
    {
        return $this->value !== $this->previousValue;
    }

    public function hasIncreased(): bool
    {
        return $this->value > $this->previousValue;
    }

    public function format(float $value): string
    {
        return sprintf($this->format, $value);
    }
}
