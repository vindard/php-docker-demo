# Description

This is a demo repo I've made to show how to setup a php repo with dockerfiles and instructions to develop via docker containers, alternatively using VSCode's Remote Containers extension as well.

### Compatibility

This setup was tested on an Ubuntu machine and should work pretty well in any Unix-based system. It doesn't play as well with Windows and Powershell and may need a bit more config/troubleshooting.

## Local Development with Docker

#### To setup locally for the first time

1. Setup a `.env` file or get a pre-configured one from another dev on the project. The format for a `.env` file is as follows:

   ```
   export MYSQL_ROOT_PASSWORD="password"
   export MYSQL_DATABASE="my_db"
   export MYSQL_USER="dbuser"
   export MYSQL_PASSWORD="dbpass"

   export WS_HOST_PORT="8000"
   export PMA_HOST_PORT="8001"
   export MYSQL_HOST_PORT="6033"

   export REMOTE_SQL_FILE="http://"
   export LOCAL_SQL_FILE="my_db.sql"

   ```

1. Run `$ ./dev start`

   - Navigate to `localhost:<WS_HOST_PORT>` to access the website (`<WS_HOST_PORT>` is set in the `.env` file)

   - Navigate to `localhost:<PMA_HOST_PORT>` to access _phpmyadmin_ (`<PMA_HOST_PORT>` is set in the `.env` file)

    _**Note:** run `$ ./dev --help` to see other container handling options_

.
#### After initial setup: develop inside container with VSCode

Use VSCode's `Remote Container` feature to remote into the running container to edit files

1. Install the [Remote - Containers](https://marketplace.visualstudio.com/items?itemName=ms-vscode-remote.remote-containers) extension for VSCode

1. Build and open the repo inside the container by hitting `Ctrl + Shift + P` (`Cmd + Shift + P` on MacOS) and selecting the `Remote-Containers: Rebuld and Reopen in Container` option

1. Close the container when finished by hitting `Ctrl + Shift + P` (`Cmd + Shift + P` on MacOS) again and selecting `Remote-Containers: Close Remote Connection`

1. _After the first build, you can simply use the `Remote-Containers: Rebuld and Reopen in Container` to re-enter the development environment_

_**Note:** to enable interaction with the remote repo on Github via SSH, follow the instructions to **have a local SSH agent running** before building the container [at this link](https://code.visualstudio.com/docs/remote/containers#_using-ssh-keys)._


