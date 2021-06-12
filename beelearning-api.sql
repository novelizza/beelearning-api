CREATE TYPE "gender" AS ENUM (
  'Pria',
  'Wanita'
);

CREATE TABLE "siswa" (
  "id_siswa" SERIAL PRIMARY KEY,
  "nama" varchar,
  "tempat" varchar,
  "tanggal_lahir" date,
  "nisn" varchar,
  "gender" gender,
  "kontak_siswa" varchar,
  "alamat" varchar,
  "wali" varchar,
  "kontak_wali" varchar,
  "created_at" timestamp,
  "updated_at" timestamp,
  "deleted_at" timestamp
);
