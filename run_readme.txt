Usage: appcfg.py [options] <action>

Action must be one of:
  backends: Perform a backend action.
  backends configure: Reconfigure a backend without stopping it.
  backends delete: Delete a backend.
  backends list: List all backends configured for the app.
  backends rollback: Roll back an update of a backend.
  backends start: Start a backend.
  backends stop: Stop a backend.
  backends update: Update one or more backends.
  create_bulkloader_config: Create a bulkloader.yaml from a running application.
  cron_info: Display information about cron jobs.
  delete_version: Delete the specified version for an app.
  download_app: Download a previously-uploaded app.
  download_data: Download entities from datastore.
  help: Print help for a specific action.
  list_versions: List all uploaded versions for an app.
  request_logs: Write request logs in Apache common log format.
  resource_limits_info: Get the resource limits.
  rollback: Rollback an in-progress update.
  set_default_version: Set the default (serving) version.
  start_module_version: Start a module version.
  stop_module_version: Stop a module version.
  update: Create or update an app version.
  update_cron: Update application cron definitions.
  update_dispatch: Update application dispatch definitions.
  update_dos: Update application dos definitions.
  update_indexes: Update application indexes.
  update_queues: Update application task queue definitions.
  upload_data: Upload data records to datastore.
  vacuum_indexes: Delete unused indexes from application.
Use 'help <action>' for a detailed description.

Options:
  -h, --help            Show the help message and exit.
  -q, --quiet           Print errors only.
  -v, --verbose         Print info level logs.
  --noisy               Print all logs.
  -s SERVER, --server=SERVER
                        The App Engine server.
  -e EMAIL, --email=EMAIL
                        The username to use. Will prompt if omitted.
  -H HOST, --host=HOST  Overrides the Host header sent with all RPCs.
  --no_cookies          Do not save authentication cookies to local disk.
  --skip_sdk_update_check
                        Do not check for SDK updates.
  -A APP_ID, --application=APP_ID
                        Set the application, overriding the application value
                        from app.yaml file.
  -M MODULE, --module=MODULE
                        Set the module, overriding the module value from
                        app.yaml.
  -V VERSION, --version=VERSION
                        Set the (major) version, overriding the version value
                        from app.yaml file.
  -r RUNTIME, --runtime=RUNTIME
                        Override runtime from app.yaml file.
  -E NAME:VALUE, --env_variable=NAME:VALUE
                        Set an environment variable, potentially overriding an
                        env_variable value from app.yaml file (flag may be
                        repeated to set multiple variables).
  -R, --allow_any_runtime
                        Do not validate the runtime in app.yaml
  --oauth2              Ignored (OAuth2 is the default).
  --oauth2_refresh_token=OAUTH2_REFRESH_TOKEN
                        An existing OAuth2 refresh token to use. Will not
                        attempt interactive OAuth approval.
  --oauth2_access_token=OAUTH2_ACCESS_TOKEN
                        An existing OAuth2 access token to use. Will not
                        attempt interactive OAuth approval.
  --authenticate_service_account
                        Authenticate using the default service account for the
                        Google Compute Engine VM in which appcfg is being
                        called
  --noauth_local_webserver
                        Do not run a local web server to handle redirects
                        during OAuth authorization.
  -f, --force           Force deletion without being prompted.
  --force_rollback      Force rollback.
  --exporter_opts=EXPORTER_OPTS
                        A string to pass to the Exporter.initialize method.
  --result_db_filename=RESULT_DB_FILENAME
                        Database to write entities to during config
                        generation.
  --url=URL             The location of the remote_api endpoint.
  --batch_size=BATCH_SIZE
                        Number of records to post in each request.
  --bandwidth_limit=BANDWIDTH_LIMIT
                        The maximum bytes/second bandwidth for transfers.
  --rps_limit=RPS_LIMIT
                        The maximum records/second for transfers.
  --http_limit=HTTP_LIMIT
                        The maximum requests/second for transfers.
  --db_filename=DB_FILENAME
                        Name of the progress database file.
  --auth_domain=AUTH_DOMAIN
                        The name of the authorization domain to use.
  --log_file=LOG_FILE   File to write bulkloader logs.  If not supplied then a
                        new log file will be created, named: bulkloader-log-
                        TIMESTAMP.
  --dry_run             Do not execute any remote_api calls
  --namespace=NAMESPACE
                        Namespace to use when accessing datastore.
  --num_threads=NUM_THREADS
                        Number of threads to transfer records with.
  --filename=FILENAME   The name of the file containing the input data.
                        (Required)
  --kind=KIND           The kind of the entities to store.
  --has_header          Whether the first line of the input file should be
                        skipped
  --loader_opts=LOADER_OPTS
                        A string to pass to the Loader.initialize method.
  --config_file=CONFIG_FILE
                        Name of the configuration file.
  --num_runs=NUM_RUNS   Number of runs of each cron job to displayDefault is 5
  --no_precompilation   Disable automatic precompilation (ignored for Go
                        apps).
  --backends            Update backends when performing appcfg update.
  --no_usage_reporting  Disable usage reporting.
  -I INSTANCE, --instance=INSTANCE
                        Instance to lock/unlock.
  -n NUM_DAYS, --num_days=NUM_DAYS
                        Number of days worth of log data to get. The cut-off
                        point is midnight US/Pacific. Use 0 to get all
                        available logs. Default is 1, unless --append is also
                        given; then the default is 0.
  -a, --append          Append to existing file.
  --severity=SEVERITY   Severity of app-level log messages to get. The range
                        is 0 (DEBUG) through 4 (CRITICAL). If omitted, only
                        request logs are returned.
  --vhost=VHOST         The virtual host of log messages to get. If omitted,
                        all log messages are returned.
  --include_vhost       Include virtual host in log messages.
  --include_all         Include everything in log messages.
  --end_date=END_DATE   End date (as YYYY-MM-DD) of period for log data.
                        Defaults to today.
