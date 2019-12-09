## Deployment Instructions

* Clone repository or un-compress a release archive:

`git clone https://github.com/furqansiddiqui/bitcoin-sandbox-php`

* Create temporary data directories:

`cp -r bitcoin-sandbox-php/tmp_sample bitcoin-sandbox-php/tmp`

* Give appropriate permissions to temp data directories:

`chmod -R 777 bitcoin-sandbox-php/tmp`

* Delete unnecessary `tmp_sample` directory:

`rm -rf bitcoin-sandbox-php/tmp_sample`

* Go inside source directory:

`cd bitcoin-sandbox-php/src`

* Copy configuration files:

`cp -r config_sample/ config/`

* Delete unnecessary `config_sample` directory:

`rm -rf config_sample`

* Edit all configuration files in a YAML compatible text editor.
* Make `console` file executable:

`chmod +x console`

* Run composer installation

`composer install`

* Confirm all prerequisites from CLI: 

`./console check_requirements`
