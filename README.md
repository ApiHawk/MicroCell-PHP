<p align="center">
    <img title="AppCell" height="100" src="https://cdn.apihawk.com/welcome-images/appcell.png" />
</p>


<h4> <center>MicroCell is a toolkit for writing AppCell plugins.</h4>


AppCell is an orchestrative software that incorporates a plugin architecture. It allows one software to communicate with multiple other such without coupling, modifying the main software source, or hard-coding plugins. This way the integration of various softwares and the migration of services between such will become faster, more secure and more easily accomplished.

- Built on top of the [Laravel](https://laravel.com) components.
- Optional installation of Laravel [Eloquent](https://laravel-zero.com/docs/database/), Laravel [Logging](https://laravel-zero.com/docs/logging/) and many others.
- Supports interactive [menus](https://laravel-zero.com/docs/build-interactive-menus/) and [desktop notifications](https://laravel-zero.com/docs/send-desktop-notifications/) on Linux, Windows & MacOS.
- Ships with a [Scheduler](https://laravel-zero.com/docs/task-scheduling/) and  a [Standalone Compiler](https://laravel-zero.com/docs/build-a-standalone-application/).
- Integration with [Collision](https://github.com/nunomaduro/collision) - Beautiful error reporting

------

## Documentation

For full documentation, visit [apihawk.com/help](https://www.apihawk.com/en/help/).

## Instalation

microcell is available on composer. To install it, type:

### Via ApiHawk Installer
```bash
composer global require "apihawk/installer"
```

Make sure to place composer's system-wide vendor bin directory in your `$PATH` so the ApiHawk executable can be located by your system. This directory exists in different locations based on your operating system. On macOS and GNU/Linux distributions, it's $HOME/.composer/vendor/bin.

Once installed, the `apihawk new-cell` command will create a fresh MicroCell installation in the directory you specify. For instance, apihawk new-cell YourVendorName will create a directory named YourVendorNameCell containing a fresh MircoCell installation with all of MicroCell's dependencies already installed:
```bash
apihawk new-cell YourVendorName
```

### Via Composer Create-Project
```bash
composer create-project --prefer-dist apihawk/microcell YourVendorName
```

After installing the skeleton, run "app renaming" command in order to have freshly buit skeleton with all required installation files. 

[APPCELL INSTALLATION FILES](https://www.apihawk.com/en/help/appcell/appcell-installation-files/)

```bash
./application app:rename
```

```bash
Renaming the application...

 What is your application name?:
 > ApiHawk

 What is your website? e.g. https://apihawk.com. The website should be reachable:
 > https://apihawk.com

Generate folder structure. (./appcell): ✔
Fetch website metadata: ✔
Writing AppCell.json: ✔
Please select what functionalities, your service will have (defaults to renewable, suspendable). Multiple choice support. E.g. 0,1,2,3
  [0] Renewable
  [1] Suspendable
  [2] Availability Check
  [3] SSO (single-sign-on)
 > 0,1,2,3
You have just selected: Renewable, Suspendable, Availability Check, SSO (single-sign-on)
Generate plugins.json: ✔
Generate resources.json: ✔
Generate settings.json: ✔
Generate action files: loading... 
 created successfully.
 created successfully.
 created successfully.
 created successfully.
 created successfully.
 created successfully.
 created successfully.
 created successfully.
 created successfully.
 created successfully.
Generate action files: ✔
```
 
When the renaming is done, you will have new files in the directories: `./appcell` and `./app/Actions`
To start building your app, need to create .env file in the format: 

```bash
AH_AMQP_HOST=
AH_AMQP_PORT=
AH_AMQP_USER=
AH_AMQP_PASS=
AH_AMQP_VHOST=/
AH_AMQP_HEARTBEAT=15

AH_ETCD_HOST=
AH_ETCD_PORT=
AH_ETCD_USER=
AH_ETCD_PASS=
```

Contact ApiHawk for providing you access to the required services.
[ApiHawk Contact](https://www.apihawk.com/en/contacts/)
