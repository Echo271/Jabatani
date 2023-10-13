import requests, json, csv
import pandas as pd
import numpy as np
import os
from datetime import datetime, timedelta

def fetch_and_save_data(date):
    url = f"http://api.samarindakota.go.id/api/v2/generate/dinas-perdagangan/harga-harian?tanggal={date}"

    headers = {
        'Accept': "application/json",
        'Content-Type': "application/json",
        'Authorization': "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjY5OGM5MjU2NGFiMzZiOTFkYTQ5YTM4ZDZmOTUyMDdiNGNiMjAwMmVkMDExZjMxMjVlZmRlNTE1ODk0MDAzZmE4N2M0MzdkNWVjYzUzMzc4In0.eyJhdWQiOiIzIiwianRpIjoiNjk4YzkyNTY0YWIzNmI5MWRhNDlhMzhkNmY5NTIwN2I0Y2IyMDAyZWQwMTFmMzEyNWVmZGU1MTU4OTQwMDNmYTg3YzQzN2Q1ZWNjNTMzNzgiLCJpYXQiOjE2OTYyNjQyOTEsIm5iZiI6MTY5NjI2NDI5MSwiZXhwIjoxNzI3ODg2NjkxLCJzdWIiOiI3NjEiLCJzY29wZXMiOlsibW9ub2dyYWZpLWtlY2FtYXRhbiIsIm1vbm9ncmFmaS1rZWx1cmFoYW4iLCJwdXNrZXNtYXMiLCJ0ZW1wYXQtaWJhZGFoIiwiZGF0YS1ydCIsInBlcnVzYWhhYW4tamFzYSIsImthd2FzYW4tcmF3YW4iLCJrb3BlcmFzaSIsInNhcmFuYS1vbGFocmFnYSIsIm9yZ2FuaXNhc2kiLCJwYXJpd2lzYXRhIiwicGVyZGFnYW5nYW4iLCJwb3N5YW5kdSIsInRva29oLW1hc3lhcmFrYXQiLCJ0b2tvaC1hZ2FtYSIsInNvc2lhbCIsInBlbnlha2l0LWlzcGEiLCJwZW55YWtpdC1kaWFyZSIsInBlbnlha2l0LWtpYSIsInBlbnlha2l0LXBoYnMiLCJwZW55YWtpdC1wbmV1bW9uaWEiLCJwZW55YWtpdC10YiIsInJlZmVyZW5zaS1wcm92aW5zaSIsInJlZmVyZW5zaS1rZWx1cmFoYW4iLCJwZWdhd2FpLXBlci1nb2xvbmdhbiIsInBlZ2F3YWktcGVyLWVzZWxvbiIsInBlZ2F3YWktcGVyLWdlbmRlciIsInBlZ2F3YWktcGVyLW9wZCIsInBlZ2F3YWktcGVyLWFnYW1hLWdlbmRlciIsInBlZ2F3YWktcGVyLWVzZWxvbi1nZW5kZXIiLCJwZWdhd2FpLXBlci1nb2xvbmdhbi1nZW5kZXIiLCJwZWdhd2FpLXBlci1wZW5kaWRpa2FuLWdlbmRlciIsInBlZ2F3YWktcGVyLXBlbnNpdW4tZ29sb25nYW4tZ2VuZGVyIiwicGVnYXdhaS1wZXItdW11ci1nZW5kZXIiLCJwZWdhd2FpLXBlci1qYWJhdGFuLWZ1bmdzaW9uYWwiLCJiZXJpdGEiLCJsaXN0LW9wZCIsInJlbnN0cmEiLCJldmVudHMiLCJiZXJpdGFwYXJpd3N0YSIsImFnZW5kYSIsInBlbmd1bXVtYW4iLCJwZW5naGFyZ2FhbiIsImdhbGVyaSIsImJpZGFuZyIsInN0cnVrdHVyYWwiLCJrb21vZGl0YXMiLCJwYXNhci10cmFkaXNpb25hbCIsInB1c2F0LW9sZWgtb2xlaCIsInBhc2FyLW1vZGVybiIsImhhcmdhLWhhcmlhbiIsImhhcmdhLWtvbW9kaXRpIiwic29wIiwicGFzYXItd2l0aC1rb21vZGl0aSIsImF0bGl0Iiwic2FyYW5hLXByYXNhcmFuYSIsImNhYm9yIiwic2Vrb2xhaCIsImhvdGxpbmUiLCJwZXJhdHVyYW4iLCJrYXN1cy1wZXItamVuaXMiLCJrYXN1cy1wZXIta2VjYW1hdGFuIiwicGVydXNhaGFhbi10ZXJkYWZ0YXIiLCJsb3dvbmdhbi13ZWJzaXRlIiwiYmVyaXRha29taW5mbyIsImNjdHYiLCJvcGQiLCJTS1QiLCJ0ZXNicHMiLCJtYXN0ZXJrZWNhbWF0YW4iLCJ0ZW5hbnQiLCJiZXJpdGFfcHBpZCIsInJlZmVyZW5zaS1vcmdhbmlzYXNpIiwiZG9rdW1lbiIsImFsYnVtIiwidmlkZW8iLCJnbG9iYWwiLCJjb3ZpZC1oYXJpYW4iLCJwcm92aW5zaSIsImtvdGEiLCJrZWNhbWF0YW4iLCJrZWx1cmFoYW4iLCJrYXRlZ29yaSIsInBlcmF0dXJhbi1rZW1lbnRlcmlhbiIsInBlcmF0dXJhbi1ieS11dWlkIiwiaGFyaWFuIiwicHJvZHVrIiwidXJ1c2FuIiwiamVuaXNkYXRhIiwidW5pdCIsInBlbmNhcmlhbiJdfQ.TBHr1pa73nY-H18rSg8KdbJ4dZjPpYT_Q-MQhco2lFEfDJ7zMiE0qowykHQP8wm4cdcGChpTp0-IyY9NgpFa37opvPQrEiyK7Go--c4vtlGYYA5WCfWnstUdDsWAQhHTNQTHBHqQZV8HIyIqx419q71ryMq8Ay2OqXmVsZp67dagf8_AmwL8cWWPWaqI5F5GWvY6-pSxsQFKcEj_xaoGiz7LZ8SnXWGnNETSKdIozkrjPWSfGLpDzlIl2mqMwi52S5BWBJzZs3kI766hVlKr37qn1yzzLs9kMVxENCZumzRo00kRJV6wffkP6wVuFgN-LAZjtW3GWCvGqE_WvpWGsNy0tPfDGElG7KghCuV9WqTexW3iPov7XXHn5M3w--YLpELQSZHZiFYIxga3ItoztTzDRZAcSodrE6GK_qx6CWtzFO1fXQaml9UEaIsUS0ha8tTHqTP2Klezj-X2t46u-gOydXeLLV9cj7QlSSh9n1GO0BDfCNshmgfGtl5zhncMoy8elUnlC_AK95_HzA8s_lVlW1pSMU2eE_NAtNgT7S5h7qGQ3f6_fXr6PlOwJZfeh4DJDRPXQdl_DM3004G71xam7rRs2u06q-F9T11Z0CF6ixpa5YYEfGrZDamgjxJyjR-MPE46_eYSvKkJ2tMv-xq1CsAS1t5grhn5aq0Ix_E"
    }

    try:
        response = requests.get(url, headers=headers)
        response.raise_for_status()  # Check for any HTTP errors
        data = response.json()
        # Convert JSON data to a pandas DataFrame
        df = pd.json_normalize(data)
        # Save the DataFrame to a CSV file
        output_file = f"dataserver\hargapasar-{date}.csv"
        df.to_csv(output_file, index=False)
        print(f"Data saved to {output_file}")
    except requests.exceptions.RequestException as e:
        print("Error:", e)

# Define json data
date1 = "2023-10-12"
date2 = "2023-10-13"
fetch_and_save_data(date1)
fetch_and_save_data(date2)

def clean_data_and_save(df_path, cleaned_csv_path, cleaned_json_path):
    # Data cleaning
    df = pd.read_csv(df_path)

    # Remove 'Rp.', 'per', and 'Kg' from the 'price' column
    df['harga'] = df['harga'].str.replace('Rp.', '').str.replace('per', '').str.replace(r'(?i)kg', '').str.replace('.', '')

    # Add "Kg" to the unit column
    df['satuan'] = 'Kg'

    # Filter the DataFrame based on the 'komoditas' column
    picked_data = ["Jagung Pipilan Lokal", "Cabe Merah Besar", "Cabe Keriting", "Cabe Biasa/Tiung", "Cabe Rawit", "Bawang Merah", "Bawang Putih", "Kacang Hijau", "Kacang Tanah", "Ketela Pohon", "Kacang Kedelai Lokal", "Apel Lokal", "Jeruk Lokal", "Kentang", "Kol", "Tomat", "Wortel Impor", "Wortel Lokal", "Kacang Panjang", "Kangkung", "Jagung Pipilan Kwalitas Satu"]

    df = df[df['komoditas'].isin(picked_data)]

    # Convert 'harga' column to integers
    df['harga'] = pd.to_numeric(df['harga'], errors='coerce')

    # Function to generate a random integer between 1 and 100
    def generate_random_integer(value):
        if pd.isna(value):
            return np.random.randint(10, 101) * 1000  # Generate a random integer in the range [10,000, 100,000] with interval 1,000
        elif value == '0':
            return np.random.randint(10, 101) * 1000  # Generate a random integer in the range [10,000, 100,000] with interval 1,000
        else:
            return int(value)

    # Apply the function to the 'satuan' column
    df['harga'] = df['harga'].apply(generate_random_integer)

    # Merata-ratakan harga berdasarkan kelompok
    df.sort_values(by=["komoditas"], ascending=True, inplace=True)
    rata_harga = df.groupby('komoditas')['harga'].mean()
    rata_harga = rata_harga.round(-2)
    
    df['harga'] = df['komoditas'].map(rata_harga)
    df['harga'] = df['harga'].astype(int)

    # Menghapus kolom pasar dan data yang terduplikat hasil rata-rata
    df.drop(columns=['pasar'], inplace=True)
    df.drop_duplicates(subset=['harga'], keep='first', inplace=True)

    # Reset index
    df.reset_index(drop=True, inplace=True)

    # Write the modified DataFrame to CSV and JSON files
    df.to_csv(cleaned_csv_path, index=False)
    df.to_json(cleaned_json_path)

    return df

# statement date 1
df_date1 = f"dataserver\hargapasar-{date1}.csv"
cleaned_csv_date1 = f'dataserver\cleaned-hargapasar-{date1}.csv'
cleaned_json_date1 = f'dataserver\hargapasar-{date1}.json'

cleaned_df_date1 = clean_data_and_save(df_date1, cleaned_csv_date1, cleaned_json_date1)
print(f"Successfully create data of hargapasar-{date1}.csv")


# statement date 2
df_date2 = f"dataserver\hargapasar-{date2}.csv"
cleaned_csv_date2 = f'dataserver\cleaned-hargapasar-{date2}.csv'
cleaned_json_date2 = f'dataserver\hargapasar-{date2}.json'

cleaned_df_date2 = clean_data_and_save(df_date2, cleaned_csv_date2, cleaned_json_date2)
print(f"Successfully create data of hargapasar-{date2}.csv")


# Path to the CSV file you want to delete
file_path = f"dataserver\hargapasar-{date1}.csv"
# Check if the file exists before attempting to delete
if os.path.exists(file_path):
    os.remove(file_path)
    print(f'{file_path} deleted successfully.')
else:
    print(f'{file_path} does not exist.')

file_path = f"dataserver\hargapasar-{date2}.csv"
# Check if the file exists before attempting to delete
if os.path.exists(file_path):
    os.remove(file_path)
    print(f'{file_path} deleted successfully.')
else:
    print(f'{file_path} does not exist.')