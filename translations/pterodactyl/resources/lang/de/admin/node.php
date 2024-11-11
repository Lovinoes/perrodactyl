<?php

return [
    'validation' => [
        'fqdn_not_resolvable' => 'Der bereitgestellte FQDN oder die angegebene IP-Adresse wird nicht in eine gültige IP-Adresse aufgelöst.',
        'fqdn_required_for_ssl' => 'Ein vollständig qualifizierter Domänenname, der in eine öffentliche IP-Adresse aufgelöst wird, ist erforderlich, um SSL für diesen Node zu verwenden.',
    ],
    'notices' => [
        'allocations_added' => 'Die Ports wurden erfolgreich freigegeben.',
        'node_deleted' => 'Node wurde erfolgreich entfernt.',
        'location_required' => 'Du musst zuerst ein Standort hinzufügen, bevor du ein Node erstellen kannst.',
        'node_created' => 'Neuer Node erfolgreich erstellt. Du kannst den Daemon auf diesem Computer automatisch konfigurieren, indem du die Registerkarte \'Wings-Integration\' öffnest. <strong>Bevor du Server hinzufügen kannst, musst du zuerst mindestens eine IP-Adresse und einen Port zuweisen.</strong>',
        'node_updated' => 'Die Informationen zum Node wurden gespeichert. Möglicherweise ist ein Neustart notwendig.',
        'unallocated_deleted' => 'Alle nicht zugewiesene Ports für <code>:ip</code> wurden entfernt.',
    ],
];
