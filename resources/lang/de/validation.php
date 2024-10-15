<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => ':attribute muss akzeptiert werden',
    'active_url' => ':attribute ist keine validate URL.',
    'after' => ':attribute muss ein Datum nach :date sein.',
    'after_or_equal' => ':attribute muss ein Datum nach oder gleich :date sein.',
    'alpha' => ':attribute darf nur Buchstaben enthalten.',
    'alpha_dash' => ':attribute darf nur Buchstaben, Zahlen und Bindestriche enthalten.',
    'alpha_num' => ':attribute darf nur Buchstaben und Zahlen enthalten.',
    'array' => ':attribute muss ein Array sein.',
    'before' => ':attribute muss ein Datum vor :date sein.',
    'before_or_equal' => ':attribute muss ein Datum vor oder gleich :date sein.',
    'between' => [
        'numeric' => ':attribute muss zwischen :min und :max liegen.',
        'file' => ':attribute muss zwischen :min und :max Kilobyte liegen.',
        'string' => ':attribute muss zwischen :min und :max Zeichen liegen.',
        'array' => ':attribute muss zwischen :min und :max Elemente haben.',
    ],
    'boolean' => ':attribute muss wahr oder falsch sein.',
    'confirmed' => ':attribute Bestätigung stimmt nicht überein.',
    'date' => ':attribute ist kein gültiges Datum.',
    'date_format' => ':attribute passt nicht zum Format :format.',
    'different' => ':attribute und :other müssen unterschiedlich sein.',
    'digits' => ':attribute muss :digits Ziffern sein.',
    'digits_between' => ':attribute muss zwischen :min und :max Ziffern liegen.',
    'dimensions' => ':attribute hat ungültige Bildabmessungen.',
    'distinct' => 'Das :attribute Feld hat einen doppelten Wert.',
    'email' => ':attribute muss eine gültige E-Mail-Adresse sein.',
    'exists' => 'Das ausgewählte Attribut :attribute ist ungültig.',
    'file' => ':attribute muss eine Datei sein.',
    'filled' => 'Das :attribute Feld wird für die Fortsetzung benötigt.',
    'image' => ':attribute muss ein Bild sein.',
    'in' => 'Das ausgewählte Attribut :attribute ist ungültig.',
    'in_array' => 'Das :attribute Feld existiert nicht in :other.',
    'integer' => ':attribute muss eine ganze Zahl sein.',
    'ip' => ':attribute muss eine gültige IP-Adresse sein.',
    'json' => ':attribute muss eine gültige JSON-Zeichenfolge sein.',
    'max' => [
        'numeric' => ':attribute darf nicht größer als :max sein.',
        'file' => ':attribute darf nicht größer als :max kilobytes sein.',
        'string' => ':attribute darf nicht größer als :max Zeichen sein.',
        'array' => ':attribute darf nicht mehr als :max Elemente haben.',
    ],
    'mimes' => ':attribute muss eine Datei des Typs :values sein.',
    'mimetypes' => ':attribute muss eine Datei des Typs :values sein.',
    'min' => [
        'numeric' => ':attribute muss mindestens :min sein.',
        'file' => ':attribute muss mindestens :min Kilobyte groß sein.',
        'string' => ':attribute muss mindestens :min Zeichen lang sein.',
        'array' => ':attribute muss mindestens :min Elemente haben.',
    ],
    'not_in' => 'Das ausgewählte Attribut :attribute ist ungültig.',
    'numeric' => ':attribute muss eine Nummer sein.',
    'present' => 'Das :attribute Feld muss vorhanden sein.',
    'regex' => 'Das :attribute Format ist ungültig.',
    'required' => 'Das :attribute Feld ist erforderlich.',
    'required_if' => 'Das :attribute Feld ist erforderlich, wenn :other :value ist.',
    'required_unless' => 'Das :attribute Feld ist erforderlich, es sei denn, :other ist :values.',
    'required_with' => 'Das :attribute Feld ist erforderlich, wenn :values vorhanden ist.',
    'required_with_all' => 'Das :attribute Feld ist erforderlich, wenn :values vorhanden ist.',
    'required_without' => 'Das Feld :attribute ist erforderlich, wenn :values nicht vorhanden ist.',
    'required_without_all' => 'Das :attribute Feld ist erforderlich, wenn keiner der :values vorhanden ist.',
    'same' => ':attribute und :other müssen übereinstimmen.',
    'size' => [
        'numeric' => ':attribute muss :size sein.',
        'file' => ':attribute muss :size Kilobyte sein.',
        'string' => ':attribute muss :size Zeichen sein.',
        'array' => ':attribute muss :size Elemente enthalten.',
    ],
    'string' => ':attribute muss eine Zeichenfolge sein.',
    'timezone' => ':attribute muss eine gültige Zone sein.',
    'unique' => ':attribute wurde bereits vergeben.',
    'uploaded' => ':attribute konnte nicht hochgeladen werden.',
    'url' => 'Das Format von :attribute ist ungültig.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

    // Internal validation logic for Pterodactyl
    'internal' => [
        'variable_value' => ':env Variable',
        'invalid_password' => 'Das angegebene Passwort war für dieses Konto ungültig.',
    ],
];
