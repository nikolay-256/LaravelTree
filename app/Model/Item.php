<?php declare(strict_types=1);

namespace App\Model;

class Item
{
    /**
     * Стоимость товара
     *
     * @var float
     */
    private $price = 0;
    /**
     * Позиция товара
     *
     * @var string
     */
    private $position = '';
    /**
     * Описание товара товара
     *
     * @var string
     */
    private $title = '';


    public function setPrice(float $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function setPosition(string $position): self
    {
        $this->position = $position;

        return $this;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function getPosition(): string
    {
        return $this->position;
    }

    public function getTitle(): string
    {
        return $this->title;
    }
}
