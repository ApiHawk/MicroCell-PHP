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


Generated files:

### appcell.json

```json
{
    "name": "applicationCell",
    "description": "AppCell Application Cell - Software Development for Service Providers. Cloud Billing &amp; Automation Solutions, Software development, Know-How, API Consulting",
    "license": "BSD-3-Clause",
    "minimum-stability": "dev",
    "type": "plugin",
    "support": {
        "email": "thehawks@apihawk.com"
    },
    "homepage": "https://apihawk.com",
    "prefer-stable": true,
    "config": [],
    "require": {
        "appcell": ">=1",
        "etcd": ">=3.0",
        "scope": [
            "customer_product",
            "catalog_product_field",
            "customer",
            "company",
            "email"
        ]
    }
}
```

### plugins.json

```json
{
    "plugin": {
        "application": {
            "implements": [
                "https://repository.appcell.io/core/interface/service.schema.json",
                "https://repository.appcell.io/core/interface/renewable.schema.json",
                "https://repository.appcell.io/core/interface/suspendable.schema.json",
                "https://repository.appcell.io/core/interface/availability.schema.json",
                "https://repository.appcell.io/core/interface/impersonate.schema.json"
            ],
            "actions": {
                "create": {
                    "resource": "default",
                    "action": "create",
                    "$payload": "https://repository.appcell.io/applicationcell/schema/default/create.payload.json",
                    "$result": "https://repository.appcell.io/applicationcell/schema/default/create.result.json"
                },
                "fetch": {
                    "resource": "default",
                    "action": "fetch",
                    "$payload": "https://repository.appcell.io/applicationcell/schema/default/fetch.payload.json",
                    "$result": "https://repository.appcell.io/applicationcell/schema/default/fetch.result.json"
                },
                "update": {
                    "resource": "default",
                    "action": "update",
                    "$payload": "https://repository.appcell.io/applicationcell/schema/default/update.payload.json",
                    "$result": "https://repository.appcell.io/applicationcell/schema/default/update.result.json"
                },
                "delete": {
                    "resource": "default",
                    "action": "delete",
                    "$payload": "https://repository.appcell.io/applicationcell/schema/default/delete.payload.json",
                    "$result": "https://repository.appcell.io/applicationcell/schema/default/delete.result.json"
                },
                "renew": {
                    "resource": "default",
                    "action": "renew",
                    "$payload": "https://repository.appcell.io/applicationcell/schema/default/renew.payload.json",
                    "$result": "https://repository.appcell.io/applicationcell/schema/default/renew.result.json"
                },
                "suspend": {
                    "resource": "default",
                    "action": "suspend",
                    "$payload": "https://repository.appcell.io/applicationcell/schema/default/suspend.payload.json",
                    "$result": "https://repository.appcell.io/applicationcell/schema/default/suspend.result.json"
                },
                "unsuspend": {
                    "resource": "default",
                    "action": "unsuspend",
                    "$payload": "https://repository.appcell.io/applicationcell/schema/default/unsuspend.payload.json",
                    "$result": "https://repository.appcell.io/applicationcell/schema/default/unsuspend.result.json"
                },
                "checkAvailability": {
                    "resource": "default",
                    "action": "checkAvailability",
                    "$payload": "https://repository.appcell.io/applicationcell/schema/default/checkAvailability.payload.json",
                    "$result": "https://repository.appcell.io/applicationcell/schema/default/checkAvailability.result.json"
                },
                "impersonate": {
                    "resource": "default",
                    "action": "impersonate",
                    "$payload": "https://repository.appcell.io/applicationcell/schema/default/impersonate.payload.json",
                    "$result": "https://repository.appcell.io/applicationcell/schema/default/impersonate.result.json"
                }
            }
        }
    }
}
```


### resources.json

```json
{
    "resources": {
        "default": {
            "identifier": "domain",
            "rest": [
                "create",
                "fetch",
                "fetchAll",
                "update",
                "delete"
            ],
            "actions": {
                "renew": [],
                "suspend": [],
                "unsuspend": [],
                "checkAvailability": [],
                "impersonate": []
            }
        }
    }
}
```

### settings.json

```json
{
    "fields": [
        {
            "name": "Account Plan",
            "field_key": "plan",
            "value": "basic"
        }
    ],
    "options": [
        {
            "name": "Domain",
            "key": "domain",
            "type": "text",
            "value_type": "text",
            "required": true,
            "provider": "user"
        }
    ]
}
```

