Google Auth
===========

This  module allows you to authenticate with Google and use this authentication
to carry out API requests by other modules, enabling users to manage
accounts, authenticate with Google (i.e. get an access token) and use this
authentication to perform API requests.

It allows you to enter Google account details like the Client ID, Client Secret
Key, Developer Key, and to select Google Services to be enabled. It then gets
the OAuth2 access token from Google.

The account management page shows an authenticate link if the account is not
authenticated and a revoke link if the account is authenticated.

This module includes two sub-modules:

* Google Auth Login (`gauth_login`) lets a user login to their Backdrop
account using their Google login;

* Google Auth User Support (`gauth_user`) lets a user authenticate for Google
Services.

Installation
------------

- Install this module using [the official Backdrop CMS instructions](  https://backdropcms.org/guide/modules).

- Visit the configuration page under Administration > Configuration > Web
Services > Google account settings (admin/config/services/gauth_account) and
enter the required information.

- You will need to perform corresponding configuration in the Google Developer's
Console.

Differences from Drupal 7
-------------------------

The Drupal 7 version required the Libraries module and you needed to install the
google-api-php-client library in the libraries folder. The Backdrop module does
not need the Libraries module; the google-api-php-client library is included
in this module.

PHP Version Support
-------------------

The [Google API PHP Client library](https://github.com/googleapis/google-api-php-client/releases) has different releases for different versions of PHP, currently:

* PHP 7.4
* PHP 8.0
* PHP 8.2

The version bundled with this module is 7.4. You can download one of the other versions (or a newer/older release of the library) to replace the bundled library if needed.

Note that the bundled library includes several sub-libraries in the vendor folder. If other Backdrop modules use the same library, there can be compatibility issues if the versions differ. (For example, [CiviCRM](civicrm.org) bundles its own version of the the guzzlehttp library.)

Issues
------

Bugs and feature requests should be reported in [the Issue Queue](https://github.com/backdrop-contrib/gauth/issues).

Current Maintainers
-------------------

- [Robert J. Lang](https://github.com/bugfolder)

Credits
-------

- 2.x version ported to Backdrop CMS by [Robert J. Lang](https://github.com/bugfolder).
- 1.x version ported to Backdrop CMS by [Graham Oliver](https://github.com/Graham-72/).
- Originally written for Drupal by [Sadashiv Dalvi](https://github.com/sadashivdalvi).

License
-------

This project is GPL v3 software.
See the LICENSE.txt file in this directory for complete text.

The Google API PHP Client library is released under the Apache 2.0 license. See
the LICENSE.txt file in the /libraries/google-api-php-client directory for
complete text.
