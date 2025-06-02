<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8" />
    <title>เปรียบเทียบสเปคบ้าน</title>
    <style>
        body {
            font-family: Tahoma, sans-serif;
            margin: 20px;
            background: #f4f7f8;
        }
        h2 {
            color: #34495e;
        }
        .house-list {
            max-width: 800px;
            margin-bottom: 30px;
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
        }
        .house-item {
            background: white;
            padding: 10px;
            border-radius: 8px;
            box-shadow: 0 0 8px rgba(0,0,0,0.1);
            width: 180px;
            cursor: pointer;
            user-select: none;
            display: flex;
            flex-direction: column;
            align-items: center;
            transition: background 0.3s;
        }
        .house-item:hover {
            background: #e1f0ff;
        }
        .house-item input {
            margin-bottom: 10px;
            cursor: pointer;
        }
        .house-image {
            width: 150px;
            height: 100px;
            object-fit: cover;
            border-radius: 6px;
            margin-bottom: 8px;
            border: 1px solid #ccc;
        }
        button {
            padding: 10px 20px;
            background-color: #2980b9;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
        }
        .comparison-table {
            max-width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background: white;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .comparison-table th, .comparison-table td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: center;
        }
        .comparison-table th {
            background-color: #2980b9;
            color: white;
        }
        .highlight {
            background-color: #f9e79f;
        }
    </style>
</head>
<body>

    <h2>เลือกบ้านเพื่อเปรียบเทียบสเปค</h2>

    <form id="compareForm" onsubmit="event.preventDefault(); compareHouses();">
        <div id="houseList" class="house-list">
            <!-- รายการบ้านจะโหลดจาก API ด้วย JS -->
        </div>

        <button type="submit">เปรียบเทียบ</button>
    </form>

    <div id="result"></div>

<script>
    async function fetchHouses() {
        try {
            const response = await fetch('/api/houses');
            const data = await response.json();
            return data;
        } catch (err) {
            alert('ไม่สามารถโหลดข้อมูลบ้านได้');
            return [];
        }
    }

    function renderHouseList(houses) {
        const container = document.getElementById('houseList');
        container.innerHTML = '';

        houses.forEach(house => {
            const div = document.createElement('div');
            div.className = 'house-item';

            div.innerHTML = `
                <input type="checkbox" name="houses" value="${house.id}" id="house-${house.id}">
                <label for="house-${house.id}">
                    ${house.image_url ? `<img class="house-image" src="${house.image_url}" alt="${house.name}">` : ''}
                    <div><strong>${house.name}</strong></div>
                    <div>${house.location}</div>
                </label>
            `;
            container.appendChild(div);
        });
    }

    function compareHouses() {
        const checkedBoxes = [...document.querySelectorAll('input[name="houses"]:checked')];
        if (checkedBoxes.length < 2) {
            alert('กรุณาเลือกบ้านอย่างน้อย 2 หลังเพื่อเปรียบเทียบ');
            return;
        }

        fetch('/api/houses')
            .then(res => res.json())
            .then(housesData => {
                // ดึงข้อมูลบ้านที่เลือก
                const selectedHouses = checkedBoxes.map(box => {
                    return housesData.find(h => h.id == box.value);
                });

                // สร้างตารางเปรียบเทียบ
                let html = `<h2>ผลการเปรียบเทียบบ้าน</h2>`;
                html += `<table class="comparison-table"><thead><tr>
                    <th>สเปค</th>`;

                selectedHouses.forEach(house => {
                    html += `<th>${house.name}</th>`;
                });

                html += `</tr></thead><tbody>`;

                const specs = [
                    { label: 'รูปภาพ', key: 'image_url', isImage: true },
                    { label: 'ห้องนอน', key: 'bedrooms' },
                    { label: 'ห้องน้ำ', key: 'bathrooms' },
                    { label: 'พื้นที่ (ตร.ม.)', key: 'area' },
                    { label: 'ที่จอดรถ (คัน)', key: 'car_park' },
                    { label: 'ที่ตั้ง', key: 'location' },
                    { label: 'ประเภทบ้าน', key: 'type' },
                    { label: 'จำนวนชั้น', key: 'floors' },
                    { label: 'ปีที่สร้าง', key: 'year_built' },
                    { label: 'สถานที่ใกล้เคียง', key: 'nearby_places' },
                ];

                specs.forEach(spec => {
                    html += `<tr><td style="text-align:left; font-weight:bold;">${spec.label}</td>`;

                    selectedHouses.forEach(house => {
                        let val = house[spec.key];
                        if (!val || val === "") val = '-';

                        if (spec.isImage) {
                            val = val !== '-' ? `<img src="${val}" style="width:120px; height:80px; object-fit:cover; border-radius:4px;">` : '-';
                        }

                        html += `<td>${val}</td>`;
                    });

                    html += `</tr>`;
                });

                html += `</tbody></table>`;

                document.getElementById('result').innerHTML = html;
            })
            .catch(() => alert('ไม่สามารถโหลดข้อมูลบ้านสำหรับเปรียบเทียบได้'));
    }

    // โหลดข้อมูลบ้านจาก API ตอนหน้าโหลดเสร็จ
    window.onload = async () => {
        const houses = await fetchHouses();
        renderHouseList(houses);
    };
</script>

</body>
</html>
