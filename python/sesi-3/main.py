import random

welcome_message = "Selamat datang di permainan tebak posisi ular!"
ular_position = random.randint(1, 4)
print(welcome_message)

bentuk_goa = "|_|"
goa_kosong = [bentuk_goa] * 4
goa = goa_kosong.copy()
goa[ular_position - 1] = "|0_0|"

goa_kosong = ' '.join(goa_kosong)
goa = ' '.join(goa)

name_user = input("Masukkan nama kamu: ")
print(f''' 
Halo {name_user}, kamu akan menebak posisi ular yang benar.
{goa_kosong}
''')
pilihan_user = int(input("Pilih posisi ular (1 / 2 / 3 / 4): "))

confirm_answer = input(f"Apakah kamu yakin dengan pilihanmu? (y/t): ")
if confirm_answer == "t":
    print(f"Program dihentikan")
    exit()
elif confirm_answer == "y":
    if pilihan_user == ular_position:
        print(f"{goa_kosong} \nSelamat {name_user}, kamu berhasil menebak posisi ular.")
    else:
        print(f"{goa_kosong} \nMaaf {name_user}, kamu gagal menebak posisi ular.")
else:
    print("Kamu salah memasukkan input")
    exit()