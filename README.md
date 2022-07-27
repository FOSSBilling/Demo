# demo
FOSSBilling extension to disable critical settings, generally used for public demo instances.

![A demonstration of the error message in the admin_default theme](https://user-images.githubusercontent.com/35808275/180153730-79b4c15e-d386-4e2b-8cee-e2c3822da371.png)

## Guidelines for hosting a demo
1. Perform a fresh install of FOSSBilling
2. Clone this repository to `/bb-modules/Demo/`
3. Navigate to Extensions -> Overview and enable the extension
4. After enabling the extension, run the cron jobs once (for more details on why you **have to** do it, see https://github.com/FOSSBilling/FOSSBilling/issues/170)

Ideally, you should configure your system to perform a fresh install every 5-10 minutes. The interval can be adjusted per your expected traffic.
If you want to host a public demo, you're also encouraged to join our [Discord](https://fossbilling.org/discord) server to keep in touch with the team.

## How it works
This extension is simple. It relies on hooks/events to function. The extension listens for events that are called before executing critical tasks, like when the user attempts to change system settings. The hook blocks the operation before it gets executed and shows an end-user-friendly error.

## I've accidentally enabled this extension, how do I disable it?
Due to its nature, it's impossible to disable this extension through the admin panel. You should remove the extension from the `/bb-modules/` directory manually.

## Licensing
This extension is released under the Apache v2.0 license. See [LICENSE](https://github.com/FOSSBilling/demo/blob/master/LICENSE) for the full license terms.
