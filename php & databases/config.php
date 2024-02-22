<?php

# enables a setting in the .ini that reduces the risk of session hijacking by not showing the session id in the browser
ini_set('session.use_only_cookies', 1);

# PHP enforces strict session ID validation. This means that PHP will reject uninitialized session IDs that are supplied by clients.
ini_set('session.use_strict_mode', 1);