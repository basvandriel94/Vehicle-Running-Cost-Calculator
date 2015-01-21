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

    namespace Bas\VehicleRunningCostCalculator\DataParser;

    use Bas\VehicleRunningCostCalculator\Vehicle\VehicleType;
    use Bas\VehicleRunningCostCalculator\VehicleOwner\VehicleOwner;

    /**
     * A class to retrieve the right data for the selected vehicle type
     *
     * @package   Bas\VehicleRunningCostCalculator\DataParserHandler
     *
     * @author    Bas van Driel <basvandriel94@gmail.com>
     * @copyright 2015 Bas van Driel
     * @license   MIT
     */
    class DataParserHandler
    {
        /**
         * @var VehicleType $vehicleType The vehicle type the data has to be parsed for
         */
        private $vehicleType;

        /**
         * @var VehicleOwner $vehicleOwner The vehicle's owner the data has to be parsed for
         */
        private $vehicleOwner;

        /**
         * Instantiates a new DataParserHandler class.
         *
         * @param \Bas\VehicleRunningCostCalculator\Vehicle\VehicleType       $vehicleType
         * @param \Bas\VehicleRunningCostCalculator\VehicleOwner\VehicleOwner $vehicleOwner
         */
        public function __construct(VehicleType $vehicleType, VehicleOwner $vehicleOwner) {
            $this->vehicleType  = $vehicleType;
            $this->vehicleOwner = $vehicleOwner;
        }

        public function locateDataParsers() {

        }

        public function getData() {

        }
    }