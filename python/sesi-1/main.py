import random # Import modul random

welcome_message = "Selamat datang di permainan tebak posisi ular!" # Variabel welcome_message dengan value string
ular_position = random.randint(1, 4) # Variabel ular_position dengan value random antara 1 sampai 4

print(welcome_message) # Print welcome_message

name_user = input("Masukkan nama kamu: ") # Input nama user

print(f'''
Halo {name_user}, kamu akan menebak posisi ular yang benar.
|_| |_| |_| |_|
''') # Print string dengan nama user

pilihan_user = int(input("Pilih posisi ular (1 / 2 / 3 / 4): ")) # Input pilihan user

if pilihan_user == ular_position:
    print(f"Selamat {name_user}, kamu berhasil menebak posisi ular!") # Print jika user berhasil menebak posisi ular
else:
    print(f"Maaf {name_user}, kamu gagal menebak posisi ular. Posisi ular ada di posisi {ular_position}.") # Print jika user gagal menebak posisi ular