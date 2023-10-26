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

namespace Google\Service\CloudSearch;

class PrivateMessageInfo extends \Google\Collection
{
  protected $collection_key = 'gsuiteIntegrationMetadata';
  protected $annotationsType = Annotation::class;
  protected $annotationsDataType = 'array';
  public $annotations = [];
  protected $attachmentsType = Attachment::class;
  protected $attachmentsDataType = 'array';
  public $attachments = [];
  protected $contextualAddOnMarkupType = GoogleChatV1ContextualAddOnMarkup::class;
  protected $contextualAddOnMarkupDataType = 'array';
  public $contextualAddOnMarkup = [];
  protected $gsuiteIntegrationMetadataType = GsuiteIntegrationMetadata::class;
  protected $gsuiteIntegrationMetadataDataType = 'array';
  public $gsuiteIntegrationMetadata = [];
  /**
   * @var string
   */
  public $text;
  protected $userIdType = UserId::class;
  protected $userIdDataType = '';
  public $userId;

  /**
   * @param Annotation[]
   */
  public function setAnnotations($annotations)
  {
    $this->annotations = $annotations;
  }
  /**
   * @return Annotation[]
   */
  public function getAnnotations()
  {
    return $this->annotations;
  }
  /**
   * @param Attachment[]
   */
  public function setAttachments($attachments)
  {
    $this->attachments = $attachments;
  }
  /**
   * @return Attachment[]
   */
  public function getAttachments()
  {
    return $this->attachments;
  }
  /**
   * @param GoogleChatV1ContextualAddOnMarkup[]
   */
  public function setContextualAddOnMarkup($contextualAddOnMarkup)
  {
    $this->contextualAddOnMarkup = $contextualAddOnMarkup;
  }
  /**
   * @return GoogleChatV1ContextualAddOnMarkup[]
   */
  public function getContextualAddOnMarkup()
  {
    return $this->contextualAddOnMarkup;
  }
  /**
   * @param GsuiteIntegrationMetadata[]
   */
  public function setGsuiteIntegrationMetadata($gsuiteIntegrationMetadata)
  {
    $this->gsuiteIntegrationMetadata = $gsuiteIntegrationMetadata;
  }
  /**
   * @return GsuiteIntegrationMetadata[]
   */
  public function getGsuiteIntegrationMetadata()
  {
    return $this->gsuiteIntegrationMetadata;
  }
  /**
   * @param string
   */
  public function setText($text)
  {
    $this->text = $text;
  }
  /**
   * @return string
   */
  public function getText()
  {
    return $this->text;
  }
  /**
   * @param UserId
   */
  public function setUserId(UserId $userId)
  {
    $this->userId = $userId;
  }
  /**
   * @return UserId
   */
  public function getUserId()
  {
    return $this->userId;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(PrivateMessageInfo::class, 'Google_Service_CloudSearch_PrivateMessageInfo');
