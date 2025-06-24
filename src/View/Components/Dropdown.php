<?php

namespace Daniellefence\Dropdown\View\Components;

use Illuminate\View\Component;
use Illuminate\Support\Collection;

/**
 * Class Dropdown
 *
 * This component renders a dropdown menu with a configurable button using DanielleFence components.
 * Supports both href links and button-based click actions.
 *
 * @package Daniellefence\Dropdown\View\Components
 */
class Dropdown extends Component
{
    /** @var string The label displayed on the dropdown toggle button. */
    public string $label;

    /** @var string The style variant of the button (e.g. primary, info, etc.). */
    public string $variant;

    /** @var string The size of the button (e.g. sm, md, lg, etc.). */
    public string $size;

    /** @var Collection The dropdown menu items, supporting links or interactive actions. */
    public Collection $items;

    /**
     * Create a new component instance.
     *
     * @param string $label   Button label text.
     * @param string $variant Tailwind/DaisyUI variant for button styling.
     * @param string $size    Tailwind size class for button sizing.
     * @param array  $items   Array of items with optional href, target, or click keys.
     */
    public function __construct(string $label = 'Toggle', string $variant = 'primary', string $size = 'md', array $items = [])
    {
        $this->label = $label;
        $this->variant = $variant;
        $this->size = $size;
        $this->items = collect($items);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        return view('dropdown::components.dropdown');
    }
}