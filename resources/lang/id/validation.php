<?php

return [
    'accepted' => ':attribute harus diterima.',
    'active_url' => ':attribute bukan URL yang valid.',
    'after' => ':attribute harus tanggal sesudahnya :date.',
    'after_or_equal' => ':attribute harus tanggal sesudahnya atau sama dengan :date.',
    'alpha' => ':attribute hanya berisi huruf.',
    'alpha_dash' => ':attribute hanya berisi huruf, angka, tanda hubung dan garis bawah.',
    'alpha_num' => ':attribute hanya berisi huruf dan angka.',
    'array' => ':attribute harus sebuah array.',
    'before' => ':attribute harus tanggal sebelumnya :date.',
    'before_or_equal' => ':attribute harus tanggal sebelumnya atau sama dengan :date.',
    'between' => [
        'numeric' => ':attribute harus diantara :min dan :max.',
        'file' => ':attribute harus diantara :min dan :max kilobytes.',
        'string' => ':attribute harus diantara :min dan :max karakter.',
        'array' => ':attribute harus diantara :min dan :max items.',
    ],
    'boolean' => ':attribute dasar atribut harus benar atau salah.',
    'confirmed' => ':attribute konfirmasi tidak cocok.',
    'date' => ':attribute bukan tanggal yang valid.',
    'date_equals' => ':attribute harus tanggal yang sama dengan :date.',
    'date_format' => ':attribute tidak cocok dengan format :format.',
    'different' => ':attribute dan :other harus berbeda.',
    'digits' => ':attribute harus :digits digit.',
    'digits_between' => ':attribute harus diantara :min dan :max digits.',
    'dimensions' => ':attribute memiliki dimensi gambar yang tidak valid.',
    'distinct' => ':attribute dasar memiliki nilai ganda.',
    'email' => ':attribute harus alamat email yang valid.',
    'ends_with' => ':attribute harus diakhiri dengan salah satu hal berikut: :values.',
    'exists' => 'selected :attribute tidak valid.',
    'file' => ':attribute harus berupa file.',
    'filled' => ':attribute dasar harus memiliki nilai.',
    'gt' => [
        'numeric' => ':attribute harus lebih besar dari :value.',
        'file' => ':attribute harus lebih besar dari than :value kilobytes.',
        'string' => ':attribute harus lebih besar dari :value karakter.',
        'array' => ':attribute harus lebih banyak dari :value items.',
    ],
    'gte' => [
        'numeric' => ':attribute harus lebih dari atau sama dengan :value.',
        'file' => ':attribute harus lebih besar dari atau sama dengan :value kilobytes.',
        'string' => ':attribute harus lebih besar dari atau sama dengan :value karakter.',
        'array' => ':attribute harus memiliki :value items atau lebih.',
    ],
    'image' => ':attribute harus berupa gambar.',
    'in' => 'selected :attribute tidak valid.',
    'in_array' => ':attribute dasar tidak ada di :other.',
    'integer' => ':attribute harus berupa integer.',
    'ip' => ':attribute harus berupa IP address yang valid.',
    'ipv4' => ':attribute harus berupa IPv4 address yang valid.',
    'ipv6' => ':attribute harus berupa IPv6 address yang valid.',
    'json' => ':attribute harus berupa JSON string yang valid.',
    'lt' => [
        'numeric' => ':attribute harus kurang dari :value.',
        'file' => ':attribute harus kurang dari :value kilobytes.',
        'string' => ':attribute harus kurang dari :value characters.',
        'array' => ':attribute harus kurang dari :value items.',
    ],
    'lte' => [
        'numeric' => ':attribute harus kurang dari atau sama dengan :value.',
        'file' => ':attribute harus kurang dari atau sama dengan :value kilobytes.',
        'string' => ':attribute harus kurang dari atau sama dengan :value karakter.',
        'array' => ':attribute harus kurang dari atau sama dengan :value items.',
    ],
    'max' => [
        'numeric' => ':attribute mungkin tidak lebih besar than :max.',
        'file' => ':attribute mungkin tidak lebih besar :max kilobytes.',
        'string' => ':attribute mungkin tidak lebih besar :max characters.',
        'array' => ':attribute mungkin tidak lebih dari :max items.',
    ],
    'mimes' => ':attribute harus berupa tipe: :values.',
    'mimetypes' => ':attribute harus berupa tipe: :values.',
    'min' => [
        'numeric' => ':attribute harus setidaknya :min.',
        'file' => ':attribute harus setidaknya :min kilobytes.',
        'string' => ':attribute harus setidaknya :min characters.',
        'array' => ':attribute setidaknya harus memiliki :min items.',
    ],
    'not_in' => 'yang dipilih :attribute tidak valid.',
    'not_regex' => ':attribute format yang anda masukan tidak valid.',
    'numeric' => ':attribute harus merupakan angka.',
    'password' => 'Password anda salah.',
    'present' => ':attribute bagian ini tidak bisa dikosongkan.',
    'regex' => ':attribute format tidak valid.',
    'required' => ':attribute bagian ini harus diisi.',
    'required_if' => ':attribute bagian ini dibutuhkan ketika :other is :value.',
    'required_unless' => ':attribute bagian ini dibutuhkan jikalau :other is in :values.',
    'required_with' => ':attribute bagian ini dibutuhkan ketika :values is present.',
    'required_with_all' => ':attribute bagian ini dibutuhkan ketika :values are present.',
    'required_without' => ':attribute bagian ini dibutuhkan ketika :values is not present.',
    'required_without_all' => ':attribute bagian ini dibutuhkan ketika (bagian diatas) tidak ada :values are present.',
    'same' => ':attribute dan :other harus sama.',
    'size' => [
        'numeric' => ':attribute harus :size.',
        'file' => ':attribute harus :size kilobytes.',
        'string' => ':attribute harus :size characters.',
        'array' => ':attribute harus mengandung :size items.',
    ],
    'starts_with' => ':attribute harus di mulai dari salahsatu: :values.',
    'string' => ':attribute harus string.',
    'timezone' => ':attribute harus a valid zone.',
    'unique' => ':attribute telah digunakan.',
    'uploaded' => ':attribute gagal mengunggah.',
    'url' => ':attribute format tidak valid.',
    'uuid' => ':attribute harus UUID yang valid.',

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    'attributes' => [],
];
