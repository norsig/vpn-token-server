<?php
/**
 *  Copyright (C) 2017 SURFnet.
 *
 *  This program is free software: you can redistribute it and/or modify
 *  it under the terms of the GNU Affero General Public License as
 *  published by the Free Software Foundation, either version 3 of the
 *  License, or (at your option) any later version.
 *
 *  This program is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU Affero General Public License for more details.
 *
 *  You should have received a copy of the GNU Affero General Public License
 *  along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */
return <<< 'EOF'
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width; height=device-height; initial-scale=1">
    <title>Error</title>
    <link rel="stylesheet" type="text/css" href="css/screen.css">
</head>
<body>
    <h1>Error</h1>
    <h2>{{ errorCode }}</h2>
    <p>
        <strong>{{ errorMessage }}</strong>
    </p>
    <p>
        {{ errorDescription }}
    </p>
</body>
</html>
EOF;
