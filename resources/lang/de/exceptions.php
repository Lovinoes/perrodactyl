<?php

return [
    'daemon_connection_failed' => 'Beim Versuch, mit dem Daemon zu kommunizieren, ist eine Ausnahme aufgetreten, die zu einem HTTP/:code-Antwortcode führte. Diese Ausnahme wurde protokolliert.',
    'node' => [
        'servers_attached' => 'Dieser Node darf keine aktiven Server beinhalten, die darüber laufen.',
        'daemon_off_config_updated' => 'Die Daemon-Config <strong>wurde aktualisiert</strong>, aber stehen noch nicht bereit! Du musst die Config.yml auf den neusten bringen und Wings neu starten.',
    ],
    'allocations' => [
        'server_using' => 'Der Port wurde bereits einem Server zugewiesen. Entferne erst den zugewiesenen Port vom jeweiligen Server.',
        'too_many_ports' => 'Ein Server kann nicht mehr als 1000 Ports zugeteilt bekommen (Wofür braucht man so viele?).',
        'invalid_mapping' => 'Die Kartierung für :port war ungültig und kann nicht übernommen werden.',
        'cidr_out_of_range' => 'Die CIDR-Notation erlaubt nur Masken zwischen /25 und /32.',
        'port_out_of_range' => 'Die freigegebenen Ports müssen größer als 1024 und kleiner als 65535 sein.',
    ],
    'nest' => [
        'delete_has_servers' => 'Ein Nest mit aktiven Servern kann nicht entfernt werden.',
        'egg' => [
            'delete_has_servers' => 'Ein Nest mit aktiven Servern kann nicht entfernt werden.',
            'invalid_copy_id' => 'Das zum Kopieren eines Skripts ausgewählte Ei existiert entweder nicht oder kopiert selbst ein Skript.',
            'must_be_child' => 'Die Anweisung "Einstellungen kopieren von" für dieses Egg muss eine untergeordnete Option für das ausgewählte Nest sein.',
            'has_children' => 'Dieses Egg ist mit anderen Eggs verbunden. Entferne erst die anderen Eggs, die dazu gehören.',
        ],
        'variables' => [
            'env_not_unique' => 'Die Umgebungsvariable :name muss für dieses Ei eindeutig sein.',
            'reserved_name' => 'Die Umgebungsvariable :name ist geschützt und kann keiner Variablen zugewiesen werden.',
            'bad_validation_rule' => 'Die Validierungsregel ":rule" ist keine gültige Regel für diese Anwendung.',
        ],
        'importer' => [
            'json_error' => 'Beim Analysieren der JSON-Datei ist ein Fehler aufgetreten: :error.',
            'file_error' => 'Die bereitgestellte JSON-Datei war ungültig.',
            'invalid_json_provided' => 'Die bereitgestellte JSON-Datei hat kein erkennbares Format.',
        ],
    ],
    'subusers' => [
        'editing_self' => 'Du kannst deine eigenen Berechtigungen nicht verändern.',
        'user_is_owner' => 'Der Benutzer ist bereits der Admin des Servers.',
        'subuser_exists' => 'Dieser Benutzer ist bereits ein Teil des Servers.',
    ],
    'databases' => [
        'delete_has_databases' => 'Ein Datenbankhostserver, mit dem aktive Datenbanken verknüpft sind, kann nicht gelöscht werden.',
    ],
    'tasks' => [
        'chain_interval_too_long' => 'Die maximale Intervallzeit für eine verkettete Aufgabe beträgt 15 Minuten.',
    ],
    'locations' => [
        'has_nodes' => 'Der Standort kann bei einem aktiven zugeteilten Node nicht entfernt werden.',
    ],
    'users' => [
        'node_revocation_failed' => 'Schlüssel konnten nicht widerrufen werden in <a href=":link">Node #:node</a>. :error',
    ],
    'deployment' => [
        'no_viable_nodes' => 'Es konnten keine Nodes gefunden werden, die die für die automatische Bereitstellung angegebenen Anforderungen erfüllen.',
        'no_viable_allocations' => 'Es wurden keine Portfreigaben gefunden, die die Anforderungen für die automatische Bereitstellung erfüllen.',
    ],
    'api' => [
        'resource_not_found' => 'Die angeforderte Ressource ist auf diesem Server nicht vorhanden.',
    ],
];
