<?php

/**
 * Contains all of the translation strings for different activity log
 * events. These should be keyed by the value in front of the colon (:)
 * in the event name. If there is no colon present, they should live at
 * the top level.
 */
return [
    'auth' => [
        'fail' => 'Hat das Passwort falsch eingegeben (Möglicherweise unbefugt)',
        'success' => 'Hat sich erfolgreich angemeldet',
        'password-reset' => 'Passwort zurückgesetzt',
        'reset-password' => 'Passwort-Anfrage gesendet',
        'checkpoint' => '2-FA Anfrage gesendet',
        'recovery-token' => 'Hat ein Backup-Code für 2-FA verwendet',
        'token' => '2-FA wurde genehmigt',
        'ip-blocked' => 'Anfrage von nicht gelisteter IP-Adresse geblockt: :identifier',
        'sftp' => [
            'fail' => 'SFTP Login fehlgeschlagen',
        ],
    ],
    'user' => [
        'account' => [
            'email-changed' => 'E-Mail von :old zu :new geändert',
            'password-changed' => 'Passwort geändert',
        ],
        'api-key' => [
            'create' => 'Neuen API-Schlüssel :identifier erstellt',
            'delete' => 'Hat API-Schlüssel :identifier gelöscht',
        ],
        'ssh-key' => [
            'create' => 'Hat SSH-Schlüssel :fingerprint hinzugefügt',
            'delete' => 'Hat SSH-Schlüssel :fingerprint entfernt',
        ],
        'two-factor' => [
            'create' => 'Hat 2-FA aktiviert',
            'delete' => 'Hat 2-FA deaktiviert',
        ],
    ],
    'server' => [
        'reinstall' => 'Hat den Server neu aufgesetzt',
        'console' => [
            'command' => 'Hat den Befehl ":command" ausgeführt',
        ],
        'power' => [
            'start' => 'Hat den Server gestartet',
            'stop' => 'Hat den Server gestoppt',
            'restart' => 'Hat den Server neu gestartet',
            'kill' => 'Hat den Server gekillt',
        ],
        'backup' => [
            'download' => 'Hat das Backup :name heruntergeladen',
            'delete' => 'Hat das Backup :name gelöscht',
            'restore' => 'Hat das Backup :name wiederhergestellt (Gelöschte Dateien: :truncate)',
            'restore-complete' => 'Komplette Wiederherstellung des Backups :name',
            'restore-failed' => 'Fehlgeschlagene Wiederherstellung des Backups :name',
            'start' => 'Erstellt das Backup :name',
            'complete' => 'Markiert das Backup :name als erfolgreich',
            'fail' => 'Markiert das Backup :name als fehlgeschlagen',
            'lock' => 'Hat das Backup :name gesperrt',
            'unlock' => 'Hat das Backup :name entsperrt',
        ],
        'database' => [
            'create' => 'Hat die Datenbank :name erstellt',
            'rotate-password' => 'Hat ein neues Passwort für die Datenbank :name erstellt',
            'delete' => 'Hat die Datenbank :name gelöscht',
        ],
        'file' => [
            'compress_one' => 'Hat :directory:file komprimiert',
            'compress_other' => 'Hat :count Dateien in :directory komprimiert',
            'read' => 'Hat sich :file angeschaut',
            'copy' => 'Hat eine Kopie von :file erstellt',
            'create-directory' => 'Hat den Ordner :directory:name erstellt',
            'decompress' => 'Hat :files Dateien in :directory entpackt',
            'delete_one' => 'Hat die Datei :directory:files.0 gelöscht',
            'delete_other' => 'Hat :count Dateien in :directory gelöscht',
            'download' => 'Hat :file heruntergeladen',
            'pull' => 'Hat die Remote-Datei :url in :directory abgelegt',
            'rename_one' => 'Hat den Namen :directory:files.0.from in :directory:files.0.to geändert',
            'rename_other' => 'Hat :count Dateien in :directory geändert',
            'write' => 'Hat etwas in :file verändert',
            'upload' => 'Hat einen Upload gestartet',
            'uploaded' => 'Hat :directory:file hochgeladen',
        ],
        'sftp' => [
            'denied' => 'Hat den SFTP-Zugang aufgrund ungenügender Rechte verweigert',
            'create_one' => 'Hat die Datei :files.0 erstellt',
            'create_other' => 'Hat :count neue Dateien erstellt',
            'write_one' => 'Hat etwas in :files.0 verändert',
            'write_other' => 'Hat etwas in :count Dateien verändert',
            'delete_one' => 'Hat :files.0 gelöscht',
            'delete_other' => 'Hat :count Dateien gelöscht',
            'create-directory_one' => 'Hat den Ordner :files.0 erstellt',
            'create-directory_other' => 'Hat :count Ordner erstellt',
            'rename_one' => 'Hat die Datei :files.0.from in :files.0.to unbenannt',
            'rename_other' => 'Hat :count Dateien verschoben oder umbenannt',
        ],
        'allocation' => [
            'create' => 'Hat den Port :allocation zu diesem Server zugeteilt',
            'notes' => 'Hat den Vermerk vom Port :allocation von ":old" zu ":new" geändert',
            'primary' => 'Hat den Port :allocation als primären Server-Zugang festgelegt',
            'delete' => 'Hat den Port :allocation entfernt',
        ],
        'schedule' => [
            'create' => 'Hat den Zeitplan :name erstellt',
            'update' => 'Hat den Zeitplan :name verändert',
            'execute' => 'Hat den Zeitplan :name manuell gestartet',
            'delete' => 'Hat den Zeitplan :name gelöscht',
        ],
        'task' => [
            'create' => 'Hat die Aufgabe ":action" in :name erstellt',
            'update' => 'Hat die Aufgabe ":action" in :name verändert',
            'delete' => 'Hat eine Aufgabe im Zeitplan :name gelöscht',
        ],
        'settings' => [
            'rename' => 'Hat den Server von :old zu :new umbenannt',
            'description' => 'Hat die Beschreibung des Servers von :old zu :new umbenannt',
        ],
        'startup' => [
            'edit' => 'Hat die Variable :variable von ":old" zu ":new" verändert',
            'image' => 'Hat das Docker Image von :old zu :new aktualisiert',
        ],
        'subuser' => [
            'create' => 'Hat :email als Benutzer hinzugefügt',
            'update' => 'Hat die Berechtigungen von :email verändert',
            'delete' => 'Hat :email vom Server entfernt',
        ],
    ],
];
