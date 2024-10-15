<?php

return [
    'notices' => [
        'created' => 'Das neue Nest :name wurde erfolgreich erstellt.',
        'deleted' => 'Das Nest wurde erfolgreich vom Panel entfernt.',
        'updated' => 'Die Konfigurationsoptionen des Nests wurden erfolgreich aktualisiert.',
    ],
    'eggs' => [
        'notices' => [
            'imported' => 'Dieses Egg wurde erfolgreich mit seinen zugehörigen Variablen importiert.',
            'updated_via_import' => 'Dieses Egg wurde erfolgreich mit der angegebenen Datei aktualisiert.',
            'deleted' => 'Das angefragte Egg wurde erfolgreich vom Panel entfernt.',
            'updated' => 'Die Egg-Konfiguration wurde erfolgreich aktualisiert.',
            'script_updated' => 'Das Egg-Installationsskript wurde aktualisiert und wird nun bei jeder Serverinstallation ausgeführt.',
            'egg_created' => 'Das Egg wurde erfolgreich erstellt. Du musst alle laufenden Daemons neu starten, um dieses Egg anzuwenden.',
        ],
    ],
    'variables' => [
        'notices' => [
            'variable_deleted' => 'Die Variable ":variable" wurde gelöscht und wird nach dem Rebuild nicht länger für Server verfügbar sein.',
            'variable_updated' => 'Die Variable ":variable" wurde aktualisiert. Du musst alle Server, die diese Variable verwenden, neu erstellen, um die Änderungen zu übernehmen.',
            'variable_created' => 'Die neue Variable wurde erfolgreich erstellt und diesem Egg zugeteilt.',
        ],
    ],
];