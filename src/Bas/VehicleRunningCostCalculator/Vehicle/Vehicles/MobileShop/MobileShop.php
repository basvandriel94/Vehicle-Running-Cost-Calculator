<?php
    /**
     * The MIT License (MIT)
     *
     * Copyright (c) 2014 Bas van Driel
     *
     * Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated
     * documentation files (the "Software"), to deal in the Software without restriction, including without limitation
     * the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and
     * to permit persons to whom the Software is furnished to do so, subject to the following conditions:
     *
     * The above copyright notice and this permission notice shall be included in all copies or substantial portions of
     * the Software.
     *
     * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO
     * THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
     * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF
     * CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER
     * DEALINGS IN THE SOFTWARE.
     */

    namespace Bas\VehicleRunningCostCalculator\Vehicle\Vehicles\MobileShop;

    /**
     * Use the "VehicleType" class for polymorphism
     */
    use Bas\VehicleRunningCostCalculator\Vehicle\VehicleType;


    /**
     * Defines a passenger car, a passenger car needs the relies on the following data for calculating it's road tax
     * prices:
     *
     * -
     * @package   Bas\VehicleRunningCostCalculator\Vehicle\Vehicles\MobileShop
     *
     * @author    Bas van Driel <basvandriel94@gmail.com>
     * @copyright 2015 Bas van Driel
     * @license   MIT
     */
    class MobileShop implements VehicleType
    {
        /**
         * @var float $weight The weight of the mobile shop vehicle type
         */
        private $weight;

        /**
         * Instantiates a new MobileShop class
         *
         * @param float $weight The weight of the mobile shop vehicle type
         */
        public function __construct($weight) {
            $this->weight = $weight;
        }

        /**
         * @return float $weight The weight of the mobile shop vehicle type
         */
        public function getWeight() {
            return $this->weight;
        }
    }