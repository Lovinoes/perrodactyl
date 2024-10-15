<?php

return [
    'location' => [
        'no_location_found' => 'Es konnte kein Datensatz gefunden werden, der mit dem angegebenen Kurzcode übereinstimmt.',
        'ask_short' => 'Standort Kurzcode',
        'ask_long' => 'Standortbeschreibung',
        'created' => 'Erfolgreich den neuen Ort :name mit der ID :id erstellt.',
        'deleted' => 'Der angeforderte Speicherort wurde erfolgreich gelöscht.',
    ],
    'user' => [
        'search_users' => 'Gib einen Benutzernamen, eine Benutzer-ID oder eine E-Mail-Adresse ein.',
        'select_search_user' => 'ID des zu löschenden Benutzers (Gib \'0\' ein, um erneut zu suchen)',
        'deleted' => 'Benutzer erfolgreich vom Panel entfernt.',
        'confirm_delete' => 'Bist du dir sicher, dass du diesen Nutzer vom Panel entfernen möchtest?',
        'no_users_found' => 'Mit den eingegebenen Suchbegriff wurden keine Benutzer gefunden.',
        'multiple_found' => 'Es wurden mehrere Konten für den angegebenen Benutzer gefunden, der aufgrund des Flags --no-interaction nicht gelöscht werden kann.',
        'ask_admin' => 'Ist dieser Nutzer ein Administrator?',
        'ask_email' => 'Email-Adresse',
        'ask_username' => 'Benutzername',
        'ask_name_first' => 'Vorname',
        'ask_name_last' => 'Nachname',
        'ask_password' => 'Passwort',
        'ask_password_tip' => 'Wenn du ein Konto mit einem zufälligen Kennwort erstellen möchtest, das dem Benutzer per E-Mail zugesandt wird, führe diesen Befehl erneut aus (STRG+C) und übergeben das Flag "no-password".',
        'ask_password_help' => 'Die Passwörter müssen mindestens 8 Zeichen lang sein und mindestens einen Großbuchstaben und eine Zahl enthalten.',
        '2fa_help_text' => [
            'Mit diesem Befehl wird die 2-Faktor-Authentifizierung für das Konto eines Benutzers deaktiviert, wenn sie aktiviert ist. Er sollte nur als Befehl zur Wiederherstellung des Kontos verwendet werden, wenn der Benutzer aus seinem Konto ausgesperrt wurde.',
            'Wenn du das nicht willst, drückst du STRG+C, um diesen Vorgang zu beenden.',
        ],
        '2fa_disabled' => '2-Faktor Authentifizierung wurde für :email. deaktiviert.',
    ],
    'schedule' => [
        'output_line' => 'Versenden des Auftrags für die erste Aufgabe in `:schedule` (:hash).',
    ],
    'maintenance' => [
        'deleting_service_backup' => 'Löschen der Service-Backup-Datei :file.',
    ],
    'server' => [
        'rebuild_failed' => 'Rebuild-Anfrage für ":name" (#:id) auf Node ":node" fehlgeschlagen mit Fehler: :message',
        'reinstall' => [
            'failed' => 'Neuinstallationsanforderung für ":name" (#:id) auf Knoten ":node" fehlgeschlagen mit Fehler: :message',
            'confirm' => 'Du bist dabei, eine Neuinstallation für eine Gruppe von Servern durchzuführen. Willst du fortfahren?',
        ],
        'power' => [
            'confirm' => 'Du bist dabei, eine :Aktion gegen :count-Server durchzuführen. Willst du fortfahren?',
            'action_failed' => 'Power Action-Anfrage für ":name" (#:id) auf Knoten ":node" fehlgeschlagen mit Fehler: :message',
        ],
    ],
    'environment' => [
        'mail' => [
            'ask_smtp_host' => 'SMTP Host (z.B. smtp.gmail.com)',
            'ask_smtp_port' => 'SMTP Port',
            'ask_smtp_username' => 'SMTP Nutzername',
            'ask_smtp_password' => 'SMTP Passwort',
            'ask_mailgun_domain' => 'Mailgun Domain',
            'ask_mailgun_endpoint' => 'Mailgun Endpunkt',
            'ask_mailgun_secret' => 'Mailgun Geheimschlüssel',
            'ask_mandrill_secret' => 'Mandrill Geheimschlüssel',
            'ask_postmark_username' => 'Postmark API-Schlüssel',
            'ask_driver' => 'Welcher Treiber sollte für den Versand von E-Mails verwendet werden?',
            'ask_mail_from' => 'E-Mail-Adresse, von der die E-Mails stammen sollten',
            'ask_mail_name' => 'Name, unter dem die E-Mails erscheinen sollen',
            'ask_encryption' => 'Zu verwendende Verschlüsselungsmethode',
        ],
    ],
];
