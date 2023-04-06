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

namespace Google\Service\Compute;

class InstanceTemplatesScopedList extends \Google\Collection
{
  protected $collection_key = 'instanceTemplates';
  protected $instanceTemplatesType = InstanceTemplate::class;
  protected $instanceTemplatesDataType = 'array';
  public $instanceTemplates = [];
  protected $warningType = InstanceTemplatesScopedListWarning::class;
  protected $warningDataType = '';
  public $warning;

  /**
   * @param InstanceTemplate[]
   */
  public function setInstanceTemplates($instanceTemplates)
  {
    $this->instanceTemplates = $instanceTemplates;
  }
  /**
   * @return InstanceTemplate[]
   */
  public function getInstanceTemplates()
  {
    return $this->instanceTemplates;
  }
  /**
   * @param InstanceTemplatesScopedListWarning
   */
  public function setWarning(InstanceTemplatesScopedListWarning $warning)
  {
    $this->warning = $warning;
  }
  /**
   * @return InstanceTemplatesScopedListWarning
   */
  public function getWarning()
  {
    return $this->warning;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(InstanceTemplatesScopedList::class, 'Google_Service_Compute_InstanceTemplatesScopedList');
