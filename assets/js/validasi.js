function check()
		{
			var valid=true;
			
			var obj=document.getElementById("frm");
			var nama=obj.idnama.value;
			var email=obj.idemail.value;
			var pesan=obj.idpesan.value;
			
			var polaEmail=/^.+\@.+\..+/
			
			if(nama=="")
				{
					valid=false;
					alert("Nama tidak boleh kosong");
					obj.idnama.focus();
				}
			else if(email=="")
				{
					valid=false;
					alert("Email tidak boleh kosong");
					obj.idemail.focus();
				}
			else if(!polaEmail.test(email))
				{
					valid=false;
					alert("Penulisan Email tidak valid");
					obj.idemail.focus();
				}
			else if(pesan=="")
				{
					valid=false;
					alert("Pesan tidak boleh kosong");
					obj.idpesan.focus();
				}
			
			return valid;
		}
	