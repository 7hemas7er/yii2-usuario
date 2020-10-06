<?php

/*
 * This file is part of the 2amigos/yii2-usuario project.
 *
 * (c) 2amigOS! <http://2amigos.us/>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace Da\User\Model;

use yii\rbac\Item;

class Permission extends AbstractAuthItem
{

  /**
   * @inheritdoc
   */
  public function rules()
  {
      return [
          [['name'], 'trim'],
          [['name'], 'required'],
          [['name'],'match','pattern' => '/^\/[\w]+\/[[a-zA-Z0-9*]+$/']
      ];
  }

    public function getType()
    {
        return Item::TYPE_PERMISSION;
    }
}
