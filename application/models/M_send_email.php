<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_send_email extends CI_Model {

    /**
     * Kirim email dengan SMTP Gmail.
     *
     */
    public function sending($email,$subject,$message)
    {
      // Konfigurasi email
        $config = [
            'mailtype'  => 'html',
            'charset'   => 'utf-8',
            'protocol'  => 'smtp',
            'smtp_host' => 'ssl://smtp.gmail.com',
            'smtp_user' => 'sendingmachinemail@gmail.com',  // Email gmail
            'smtp_pass'   => '11maret2002',  // Password gmail
            'smtp_port'   => 465
        ];

        $this->load->library('email', $config);
        $this->email->initialize($config);
        // End konfigurasi

        // Email dan nama pengirim
        $this->email->from('sendingmachinemail@gmail.com', 'UPN VETERAN JAWA TIMUR');

        // Email penerima
        $this->email->to($email); // Ganti dengan email tujuan

        // Lampiran email, isi dengan url/path file
        // $this->email->attach('https://images.pexels.com/photos/169573/pexels-photo-169573.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940');

        // Subject email
        $this->email->subject($subject);

        // Isi email
        $this->email->message($message);

        // Tampilkan pesan sukses atau error
        if ($this->email->send()) {
            return true;
        } else {
            return show_error($this->email->print_debugger());
        }
    }

	public function send_email($email,$subject,$message)
	{
		// Konfigurasi email
        $config = [
            'mailtype'  => 'html',
            'charset'   => 'utf-8',
            'protocol'  => 'smtp',
            'smtp_host' => 'smtp.gmail.com',
            'smtp_user' => 'sendingmachinemail@gmail.com',  // Email gmail
            'smtp_pass'   => '11maret2002',  // Password gmail
            'smtp_crypto' => 'ssl',
            'smtp_port'   => 465,
            'crlf'    => "\r\n",
            'newline' => "\r\n"
        ];

        // Load library email dan konfigurasinya
        $this->load->library('email', $config);

        // Email dan nama pengirim
        $this->email->from('pengirimemailku@gmail.com', 'UPN VETERAN JAWA TIMUR');

        // Email penerima
        $this->email->to($email); // Ganti dengan email tujuan

        // Lampiran email, isi dengan url/path file
        // $this->email->attach('https://images.pexels.com/photos/169573/pexels-photo-169573.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940');

        // Subject email
        $this->email->subject($subject);

        // Isi email
        $this->email->message($message);

        // Tampilkan pesan sukses atau error
        if ($this->email->send()) {
            return 0;
        } else {
            return 1;
        }


	}
}