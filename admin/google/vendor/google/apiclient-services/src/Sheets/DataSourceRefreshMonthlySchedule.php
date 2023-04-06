<?php
/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

namespace Google\Service\Sheets;

class DataSourceRefreshMonthlySchedule extends \Google\Collection
{
  protected $collection_key = 'daysOfMonth';
  /**
   * @var int[]
   */
  public $daysOfMonth = [];
  protected $startTimeType = TimeOfDay::class;
  protected $startTimeDataType = '';
  public $startTime;

  /**
   * @param int[]
   */
  public function setDaysOfMonth($daysOfMonth)
  {
    $this->daysOfMonth = $daysOfMonth;
  }
  /**
   * @return int[]
   */
  public function getDaysOfMonth()
  {
    return $this->daysOfMonth;
  }
  /**
   * @param TimeOfDay
   */
  public function setStartTime(TimeOfDay $startTime)
  {
    $this->startTime = $startTime;
  }
  /**
   * @return TimeOfDay
   */
  public function getStartTime()
  {
    return $this->startTime;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DataSourceRefreshMonthlySchedule::class, 'Google_Service_Sheets_DataSourceRefreshMonthlySchedule');
