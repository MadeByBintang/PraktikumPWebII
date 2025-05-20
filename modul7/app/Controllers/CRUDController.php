<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BukuModel;

class CRUDController extends BaseController
{
  public function index()
  {
    if (!session()->get('isLoggedIn')) {
      return redirect()->to(base_url('/login'));
    }

    $model = new BukuModel();
    $semuaData = $model->findAll();

    return view("index", [
      "data" => $semuaData
    ]);
  }


  public function tambah()
  {
    helper('form');
    return view("create");
  }

  public function simpan()
  {
    helper(['form']);

    $rules = [
      'judul' => [
        'rules' => 'required|is_unique[buku.judul]',
        'errors' => [
          'required' => 'Judul wajib diisi ya, jangan sampai kosong.',
          'is_unique' => 'Judul buku sudah terdaftar, gunakan yang lain.'
        ]
      ],
      'penulis' => [
        'rules' => 'required',
        'errors' => [
          'required' => 'Penulis harus diisi.'
        ]
      ],
      'penerbit' => [
        'rules' => 'required',
        'errors' => [
          'required' => 'Penerbit jangan sampai kosong.'
        ]
      ],
      'tahun_terbit' => [
        'rules' => 'required|numeric',
        'errors' => [
          'required' => 'Tahun terbit harus diisi.',
          'numeric' => 'Tahun terbit harus berupa angka.'
        ]
      ]
    ];

    if (!$this->validate($rules)) {
      return view('create', [
        'validation' => $this->validator
      ]);
    }

    $model = new BukuModel();
    $model->insert([
      'judul' => $this->request->getPost('judul'),
      'penulis' => $this->request->getPost('penulis'),
      'penerbit' => $this->request->getPost('penerbit'),
      'tahun_terbit' => $this->request->getPost('tahun_terbit'),
    ]);

    return redirect()->to(base_url('/'));
  }

  public function edit($id)
  {
    helper('form');

    $model = new BukuModel();
    $data = $model->find($id);

    if (!$data) {
      return redirect()->to(base_url('/'))->with('error', 'Data tidak ditemukan.');
    }

    return view('edit', [
      "data" => $data
    ]);
  }

  public function update($id)
  {
    helper(['form']);

    $model = new BukuModel();
    $dataLama = $model->find($id);

    $judulBaru = $this->request->getPost('judul');

    $isUniqueRule = ($judulBaru === $dataLama['judul'])
      ? 'required'
      : 'required|is_unique[buku.judul]';

    $rules = [
      'judul' => [
        'rules' => $isUniqueRule,
        'errors' => [
          'required' => 'Judul wajib diisi ya, jangan sampai kosong.',
          'is_unique' => 'Judul buku sudah terdaftar, gunakan yang lain.'
        ]
      ],
      'penulis' => [
        'rules' => 'required',
        'errors' => [
          'required' => 'Penulis harus diisi.'
        ]
      ],
      'penerbit' => [
        'rules' => 'required',
        'errors' => [
          'required' => 'Penerbit jangan sampai kosong.'
        ]
      ],
      'tahun_terbit' => [
        'rules' => 'required|numeric',
        'errors' => [
          'required' => 'Tahun terbit harus diisi.',
          'numeric' => 'Tahun terbit harus berupa angka.'
        ]
      ]
    ];

    if (!$this->validate($rules)) {
      $postData = [
        'id' => $id,
        'judul' => $judulBaru,
        'penulis' => $this->request->getPost('penulis'),
        'penerbit' => $this->request->getPost('penerbit'),
        'tahun_terbit' => $this->request->getPost('tahun_terbit'),
      ];

      return view('edit', [
        'validation' => $this->validator,
        'data' => $postData
      ]);
    }

    $model->update($id, [
      'judul' => $judulBaru,
      'penulis' => $this->request->getPost('penulis'),
      'penerbit' => $this->request->getPost('penerbit'),
      'tahun_terbit' => $this->request->getPost('tahun_terbit'),
    ]);

    return redirect()->to(base_url('/'));
  }

  public function hapus($id)
  {
    $model = new BukuModel();
    $model->delete($id);

    return redirect()->to(base_url('/'));
  }
}
