<?php

return [
    'exceptions' => [
        'no_new_default_allocation' => 'Du versuchst, die Standardzuweisung für diesen Server zu löschen, aber es gibt keine Ersatzzuweisung, die du verwenden kannst.',
        'marked_as_failed' => 'Dieser Server wurde bei einer früheren Installation als fehlgeschlagen markiert. Der aktuelle Status kann in diesem Zustand nicht umgeschaltet werden.',
        'bad_variable' => 'Es gab einen Validierungsfehler mit der Variable :name.',
        'daemon_exception' => 'Beim Versuch, mit dem Daemon zu kommunizieren, ist eine Ausnahme aufgetreten, die zu einem HTTP/:code Antwortcode führte. Diese Ausnahme wurde protokolliert (Anfrage-ID: :request_id).',
        'default_allocation_not_found' => 'Die angeforderte Standardzuweisung wurde in den Zuweisungen dieses Servers nicht gefunden.',
    ],
    'alerts' => [
        'startup_changed' => 'Die Startkonfiguration für diesen Server wurde aktualisiert. Wenn das Nest oder Egg dieses Servers geändert wurde, wird nun eine Neuinstallation durchgeführt.',
        'server_deleted' => 'Der Server wurde erfolgreich aus dem System gelöscht.',
        'server_created' => 'Der Server wurde erfolgreich im Panel erstellt. Bitte gib dem Daemon ein paar Minuten Zeit, um diesen Server vollständig zu installieren.',
        'build_updated' => 'Die Build-Details für diesen Server wurden aktualisiert. Einige Änderungen erfordern möglicherweise einen Neustart, um wirksam zu werden.',
        'suspension_toggled' => 'Der Status der Serversperre wurde in :status geändert.',
        'rebuild_on_boot' => 'Dieser Server wurde so markiert, dass ein Docker-Container-Rebuild erforderlich ist. Dies geschieht, wenn der Server das nächste Mal gestartet wird.',
        'install_toggled' => 'Der Installationsstatus für diesen Server wurde umgeschaltet.',
        'server_reinstalled' => 'Dieser Server steht ab sofort für eine Neuinstallation in der Warteschlange.',
        'details_updated' => 'Die Serverdetails wurden erfolgreich aktualisiert.',
        'docker_image_updated' => 'Das für diesen Server zu verwendende Standard-Docker-Image wurde erfolgreich geändert. Ein Neustart ist erforderlich, um diese Änderung anzuwenden.',
        'node_required' => 'Du musst mindestens eine Node konfiguriert haben, bevor du einen Server zu diesem Panel hinzufügen kannst.',
        'transfer_nodes_required' => 'Du musst mindestens 2 Nodes konfiguriert haben, bevor du Server transferieren kannst.',
        'transfer_started' => 'Servertransfer wurde gestartet.',
        'transfer_not_viable' => 'Die von dir ausgewählte Node verfügt nicht über den erforderlichen Festplatten- oder Arbeitsspeicher, um diesen Server aufzunehmen.',
    ],
];
