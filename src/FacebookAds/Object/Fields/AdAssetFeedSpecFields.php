<?php
/**
 * Copyright (c) 2015-present, Facebook, Inc. All rights reserved.
 *
 * You are hereby granted a non-exclusive, worldwide, royalty-free license to
 * use, copy, modify, and distribute this software in source code or binary
 * form for use in connection with the web services and APIs provided by
 * Facebook.
 *
 * As with any software that integrates with the Facebook platform, your use
 * of this software is subject to the Facebook Developer Principles and
 * Policies [http://developers.facebook.com/policy/]. This copyright notice
 * shall be included in all copies or substantial portions of the software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL
 * THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING
 * FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER
 * DEALINGS IN THE SOFTWARE.
 *
 */

namespace FacebookAds\Object\Fields;

use FacebookAds\Enum\AbstractEnum;

/**
 * This class is auto-generated.
 *
 * For any issues or feature requests related to this class, please let us know
 * on github and we'll fix in our codegen framework. We'll not be able to accept
 * pull request for this class.
 *
 */

class AdAssetFeedSpecFields extends AbstractEnum {

  const AD_FORMATS = 'ad_formats';
  const BODIES = 'bodies';
  const CALL_TO_ACTION_TYPES = 'call_to_action_types';
  const CAPTIONS = 'captions';
  const DESCRIPTIONS = 'descriptions';
  const GROUPS = 'groups';
  const IMAGES = 'images';
  const LINK_URLS = 'link_urls';
  const OPTIMIZATION_TYPE = 'optimization_type';
  const TARGET_RULES = 'target_rules';
  const TITLES = 'titles';
  const VIDEOS = 'videos';

  public function getFieldTypes() {
    return array(
      'ad_formats' => 'list<string>',
      'bodies' => 'list<AdAssetFeedSpecBody>',
      'call_to_action_types' => 'list<CallToActionTypes>',
      'captions' => 'list<AdAssetFeedSpecCaption>',
      'descriptions' => 'list<AdAssetFeedSpecDescription>',
      'groups' => 'list<AdAssetFeedSpecGroupRule>',
      'images' => 'list<AdAssetFeedSpecImage>',
      'link_urls' => 'list<AdAssetFeedSpecLinkURL>',
      'optimization_type' => 'string',
      'target_rules' => 'list<AdAssetFeedSpecTargetRule>',
      'titles' => 'list<AdAssetFeedSpecTitle>',
      'videos' => 'list<AdAssetFeedSpecVideo>',
    );
  }
}
