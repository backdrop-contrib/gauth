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

namespace Google\Service\Clouderrorreporting;

class ErrorGroup extends \Google\Collection
{
  protected $collection_key = 'trackingIssues';
  /**
   * @var string
   */
  public $groupId;
  /**
   * @var string
   */
  public $name;
  /**
   * @var string
   */
  public $resolutionStatus;
  protected $trackingIssuesType = TrackingIssue::class;
  protected $trackingIssuesDataType = 'array';

  /**
   * @param string
   */
  public function setGroupId($groupId)
  {
    $this->groupId = $groupId;
  }
  /**
   * @return string
   */
  public function getGroupId()
  {
    return $this->groupId;
  }
  /**
   * @param string
   */
  public function setName($name)
  {
    $this->name = $name;
  }
  /**
   * @return string
   */
  public function getName()
  {
    return $this->name;
  }
  /**
   * @param string
   */
  public function setResolutionStatus($resolutionStatus)
  {
    $this->resolutionStatus = $resolutionStatus;
  }
  /**
   * @return string
   */
  public function getResolutionStatus()
  {
    return $this->resolutionStatus;
  }
  /**
   * @param TrackingIssue[]
   */
  public function setTrackingIssues($trackingIssues)
  {
    $this->trackingIssues = $trackingIssues;
  }
  /**
   * @return TrackingIssue[]
   */
  public function getTrackingIssues()
  {
    return $this->trackingIssues;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ErrorGroup::class, 'Google_Service_Clouderrorreporting_ErrorGroup');
