<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/fakultas.css">
    <title>Document</title>
</head>
<body>
    <?php
        include "templates/sidebar.php";
    ?>
    <div class="content">
        <div class="header">
            <h1>Fakultas</h1>
            <a href="tambah_fakultas.php">
                <button>Tambah</button>
            </a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>ID Fakultas</th>
                    <th>Nama Fakultas</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>XXXXXX</td>
                    <td>Teknik</td>
                    <td>
                        <a href="edit_fakultas.php">
                            <button><svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="30px" fill="#8B5CF6"><path d="M200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h357l-80 80H200v560h560v-278l80-80v358q0 33-23.5 56.5T760-120H200Zm280-360ZM360-360v-170l367-367q12-12 27-18t30-6q16 0 30.5 6t26.5 18l56 57q11 12 17 26.5t6 29.5q0 15-5.5 29.5T897-728L530-360H360Zm481-424-56-56 56 56ZM440-440h56l232-232-28-28-29-28-231 231v57Zm260-260-29-28 29 28 28 28-28-28Z"/></svg></button>
                        </a>
                        <button><svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="30px" fill="#8B5CF6"><path d="M280-120q-33 0-56.5-23.5T200-200v-520h-40v-80h200v-40h240v40h200v80h-40v520q0 33-23.5 56.5T680-120H280Zm400-600H280v520h400v-520ZM360-280h80v-360h-80v360Zm160 0h80v-360h-80v360ZM280-720v520-520Z"/></svg></button>
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="bottom-container">
            <p>Showing 1-5 of 50</p>
            <div class="pagination">
                <button type="button">
                    <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="12"
                    height="12"
                    viewBox="0 0 24 24"
                    >
                    <path
                        fill="none"
                        stroke="currentColor"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="m14 7l-5 5l5 5"
                    />
                    </svg>
                </button>
                <p>Page 1 of 10</p>
                <button type="button">
                    <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="12"
                    height="12"
                    viewBox="0 0 24 24"
                    >
                    <g transform="translate(24 0) scale(-1 1)">
                        <path
                        fill="none"
                        stroke="currentColor"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="m14 7l-5 5l5 5"
                        />
                    </g>
                    </svg>
                </button>
            </div>
        </div>
    </div>
</body>
</html>