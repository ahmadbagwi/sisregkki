<?php
class Mmahasiswa extends CI_Model {
	function ambildata() {
		$ambildata = $this->db->get('mahasiswa');
		if ($ambildata->num_rows() > 0) {
			foreach ($ambildata->result() as $data) {
				$hasilmahasiswa[] = $data;
			}
			return $hasilmahasiswa;
		}
	}
	function simpan() {
		$nim = $this->input->post('nim');
		$nama = $this->input->post('nama');
		$jeniskelamin = $this->input->post('jeniskelamin');
		$ipk = $this->input->post('ipk');
		$jurusan = $this->input->post('jurusan');
		$data = array('nim' => $nim,
					'nama' => $nama,
					'jeniskelamin' => $jeniskelamin,
					'ipk' => $ipk,
					'jurusan' => $jurusan
					 );
		$this->db->insert('mahasiswa', $data);
	}
	function update($id) {
		$nim = $this->input->post('nim');
		$nama = $this->input->post('nama');
		$jeniskelamin = $this->input->post('jeniskelamin');
		$ipk = $this->input->post('ipk');
		$jurusan = $this->input->post('jurusan');
		$data = array('nim' => $nim,
					'nama' => $nama,
					'jeniskelamin' => $jeniskelamin,
					'ipk' => $ipk,
					'jurusan' => $jurusan
					);
		$this->db->where('id', $id);
		$this->db->update('mahasiswa', $data);
	}
	function select($id) {
		return $this->db->get_where('mahasiswa', array('id' => $id))->row();
	}
}
?>