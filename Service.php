<?php
/**
 * Copyright 2022-2026 FOSSBilling
 * SPDX-License-Identifier: Apache-2.0.
 *
 * @copyright FOSSBilling (https://www.fossbilling.org)
 * @license http://www.apache.org/licenses/LICENSE-2.0 Apache-2.0
 */

/**
 * This extension disables critical system settings.
 * It is recommended to use this extension only for public demo instances.
 */

namespace Box\Mod\Demo;

use FOSSBilling\Interfaces\WidgetProviderInterface;

class Service implements WidgetProviderInterface
{
    const err = 'This option is disabled for demo instances. Visit https://fossbilling.org/ for the installation instructions and start using FOSSBilling today.';

    private static function deny(): never
    {
        throw new \FOSSBilling\InformationException(self::err);
    }

    public function uninstall(): never
    {
        self::deny();
    }

    public function getWidgets(): array
    {
        return [
            [
                'slot' => 'admin.staff.login.form.before',
                'template' => 'mod_demo_admin_login_credentials',
            ],
            [
                'slot' => 'client.page.login.form.before',
                'template' => 'mod_demo_client_login_credentials',
            ],
        ];
    }

    // Extension protections.

    public static function onBeforeAdminDeactivateExtension(\Box_Event $event): void
    {
        $params = $event->getParameters();
        if (!isset($params['id'])) {
            return;
        }

        $di = $event->getDi();
        $ext = $di['db']->load('extension', $params['id']);
        if (is_object($ext) && $ext->type === 'mod' && strtolower($ext->name) === 'demo') {
            self::deny();
        }
    }

    public static function onBeforeAdminUpdateExtension(\Box_Event $event): never
    {
        self::deny();
    }

    public static function onBeforeAdminUninstallExtension(\Box_Event $event): never
    {
        self::deny();
    }

    public static function onBeforeAdminInstallExtension(\Box_Event $event): never
    {
        self::deny();
    }

    // Staff account protections.

    public static function onBeforeAdminStaffUpdate(\Box_Event $event): never
    {
        self::deny();
    }

    public static function onBeforeAdminStaffDelete(\Box_Event $event): never
    {
        self::deny();
    }

    public static function onBeforeAdminStaffCreate(\Box_Event $event): never
    {
        self::deny();
    }

    public static function onBeforeAdminStaffPasswordChange(\Box_Event $event): never
    {
        self::deny();
    }

    public static function onBeforeAdminStaffProfileUpdate(\Box_Event $event): never
    {
        self::deny();
    }

    public static function onBeforeAdminStaffProfilePasswordChange(\Box_Event $event): never
    {
        self::deny();
    }

    public static function onBeforeAdminStaffApiKeyChange(\Box_Event $event): never
    {
        self::deny();
    }

    // Client account protections.

    public static function onBeforeClientProfileUpdate(\Box_Event $event): never
    {
        self::deny();
    }

    public static function onBeforeClientProfilePasswordChange(\Box_Event $event): never
    {
        self::deny();
    }

    public static function onBeforeAdminClientCreate(\Box_Event $event): never
    {
        self::deny();
    }

    public static function onBeforeAdminClientDelete(\Box_Event $event): never
    {
        self::deny();
    }

    public static function onBeforeAdminClientUpdate(\Box_Event $event): never
    {
        self::deny();
    }

    public static function onBeforeAdminClientPasswordChange(\Box_Event $event): never
    {
        self::deny();
    }

    public static function onBeforeClientSignUp(\Box_Event $event): never
    {
        self::deny();
    }

    // System configuration protections.

    public static function onBeforeAdminSettingsUpdate(\Box_Event $event): never
    {
        self::deny();
    }

    public static function onBeforeAdminDeleteCurrency(\Box_Event $event): never
    {
        self::deny();
    }

    public static function onBeforeAdminUpdateCore(\Box_Event $event): never
    {
        self::deny();
    }

    public static function onBeforeAdminManualUpdate(\Box_Event $event): never
    {
        self::deny();
    }

    public static function onBeforeAdminExtensionConfigSave(\Box_Event $event): never
    {
        self::deny();
    }

    // Password reset protections.

    public static function onBeforePasswordResetClient(\Box_Event $event): never
    {
        self::deny();
    }

    public static function onBeforePasswordResetStaff(\Box_Event $event): never
    {
        self::deny();
    }

    // Theme protections.

    public static function onBeforeThemeSettingsSave(\Box_Event $event): never
    {
        self::deny();
    }
}
