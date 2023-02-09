<?php
/**
 * FOSSBilling
 *
 * @copyright FOSSBilling (https://www.fossbilling.org)
 * @license   Apache-2.0
 *
 *
 * This source file is subject to the Apache-2.0 License that is bundled
 * with this source code in the file LICENSE
 */

/**
 * This extension disables critical system settings.
 * It is recommended to use this extension only for public demo instances.
 */

namespace Box\Mod\Demo;

class Service
{
    const err = 'This option is disabled for demo instances. Visit <a href="https://fossbilling.org/" target="_blank">fossbilling.org</a> for the installation instructions and start using FOSSBilling today.';

    public function uninstall()
    {
         throw new \Box_Exception(self::err);
    }

    public static function onBeforeAdminStaffUpdate(\Box_Event $event)
    {
        throw new \Box_Exception(self::err);
    }
    
    public static function onBeforeAdminStaffDelete(\Box_Event $event)
    {
        throw new \Box_Exception(self::err);
    }
    
    public static function onBeforeAdminStaffCreate(\Box_Event $event)
    {
        throw new \Box_Exception(self::err);
    }

    public static function onBeforeAdminStaffPasswordChange(\Box_Event $event)
    {
        throw new \Box_Exception(self::err);
    }

    public static function onBeforeAdminStaffProfileUpdate(\Box_Event $event)
    {
        throw new \Box_Exception(self::err);
    }

    public static function onBeforeAdminStaffProfilePasswordChange(\Box_Event $event)
    {
        throw new \Box_Exception(self::err);
    }
    
    public static function onBeforeAdminStaffApiKeyChange(\Box_Event $event)
    {
        throw new \Box_Exception(self::err);
    }

    public static function onBeforeClientProfileUpdate(\Box_Event $event)
    {
        throw new \Box_Exception(self::err);
    }
    
    public static function onBeforeClientProfilePasswordChange(\Box_Event $event)
    {
        throw new \Box_Exception(self::err);
    }
    
    public static function onBeforeAdminClientCreate(\Box_Event $event)
    {
        throw new \Box_Exception(self::err);
    }

    public static function onBeforeAdminClientDelete(\Box_Event $event)
    {
        throw new \Box_Exception(self::err);
    }

    public static function onBeforeAdminClientUpdate(\Box_Event $event)
    {
        throw new \Box_Exception(self::err);
    }

    public static function onBeforeAdminClientPasswordChange(\Box_Event $event)
    {
        throw new \Box_Exception(self::err);
    }
    
    public static function onBeforeClientSignUp(\Box_Event $event)
    {
        throw new \Box_Exception(self::err);
    }
    
    public static function onBeforeAdminSettingsUpdate(\Box_Event $event)
    {
        throw new \Box_Exception(self::err);
    }
    
    public static function onBeforeAdminDeleteCurrency(\Box_Event $event)
    {
        throw new \Box_Exception(self::err);
    }

    public static function onBeforeAdminUpdateCore(\Box_Event $event)
    {
        throw new \Box_Exception(self::err);
    }
    
    public static function onBeforeAdminUpdateExtension(\Box_Event $event)
    {
        throw new \Box_Exception(self::err);
    }
    
    public static function onBeforeAdminUpdateConfig
    (\Box_Event $event)
    {
        throw new \Box_Exception(self::err);
    } 
    
    public static function onBeforePasswordResetClient
    (\Box_Event $event)
    {
        throw new \Box_Exception(self::err);
    } 
    
    public static function onBeforePasswordResetStaff
    (\Box_Event $event)
    {
        throw new \Box_Exception(self::err);
    } 
}
