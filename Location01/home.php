<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-BUH0YD02w8g2JMnOuB5/G3J5+R+3SAe04uHNkDOzCC9B/GHQj5rnzCnpPZVAedvTOZJACcY5NW/5ojd1ZGxy2Q=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body {
            font-family: 'VT323', monospace;
            background-color: #000;
            color: #0F0;
        }

        .container {
            max-width: 100%;
            padding: 20px;
        }

        .navbar {
            background-color: #111;
        }

        .footer {
            background-color: #111;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        .card {
            background-color: #222;
            border-color: #333;
        }

        .card-title {
            color: #0F0;
        }

        img {
            filter: invert(100%);
        }

        .ip-address {
            animation: pulse 1s infinite;
        }

        @keyframes pulse {
            0% {
                opacity: 0.6;
            }

            50% {
                opacity: 1;
            }

            100% {
                opacity: 0.6;
            }
        }

        .terminal {
            position: relative;
            overflow: hidden;
            background-color: #111;
            border-radius: 5px;
            padding: 20px;
            height: 200px;
            overflow-y: scroll;
        }

        .terminal::before {
            content: '>';
            position: absolute;
            left: 10px;
            top: 0;
            color: #0F0;
            animation: blink 1s infinite;
        }

        @keyframes blink {
            50% {
                opacity: 0;
            }
        }

        .command-line {
            margin-top: 20px;
        }

        .command {
            color: #0F0;
        }

        .response {
            color: #0F0;
            margin-left: 20px;
        }

        .system-log {
            background-color: #111;
            color: #0F0;
            padding: 10px;
            margin-top: 20px;
            border-radius: 5px;
            max-height: 200px;
            overflow-y: scroll;
        }

        .system-log-item {
            animation: slide 5s infinite;
        }

        @keyframes slide {
            0% {
                transform: translateY(-50%);
            }

            100% {
                transform: translateY(100%);
            }
        }

        /* Binary numbers animation */
        .binary-numbers {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            overflow: hidden;
            white-space: nowrap;
            font-size: 1.2rem;
            animation: scroll 30s linear infinite;
        }

        @keyframes scroll {
            0% {
                transform: translateX(100%);
            }

            100% {
                transform: translateX(-100%);
            }
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar py-4">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-2xl font-bold">Dashboard</h1>
            <div>
                <button class="bg-gray-800 text-white py-2 px-4 rounded-lg mr-4">Download</button>
                <button class="bg-gray-800 text-white py-2 px-4 rounded-lg">About</button>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container mx-auto">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            <!-- Card 1 -->
            <div class="card p-6 rounded-lg shadow-md">
    <h2 class="card-title text-xl font-semibold mb-2">Network Traffic</h2>
    <div class="grid grid-cols-2 gap-4">
        <div v-for="i in 8">
            <i class="fas fa-wifi text-green-500 text-2xl"></i>
            <span class="ip-address ml-2 text-sm">192.168.0.1</span>
            <span class="ip-address ml-2 text-sm">192.168.0.21</span>
            <span class="ip-address ml-2 text-sm">192.168.0.45</span>
            <span class="ip-address ml-2 text-sm">192.168.0.47</span>
            <span class="ip-address ml-2 text-sm">192.168.0.216</span>
        </div>
    </div>
  
</button>

</div>



            <!-- Card 2 -->
            <div class="card p-6 rounded-lg shadow-md">
                <h2 class="card-title text-xl font-semibold mb-2">Command Terminal</h2>
                <div class="terminal">
                    <div class="command-line">ls -l</div>
                    <div class="response">total 0</div>
                    <div class="command-line">cd /</div>
                    <div class="response"></div>
                    <!-- Add more commands and responses -->
                </div>
            </div>

            <!-- Card 3 -->
            <div class="card p-6 rounded-lg shadow-md">
                <h2 class="card-title text-xl font-semibold mb-2">System Logs</h2>
                <div class="system-log">
                    <div class="system-log-item">[INFO] System initialized</div>
                    <div class="system-log-item">[WARNING] CPU temperature high</div>
                    <div class="system-log-item">[ERROR] Disk space running low</div>
                    <!-- Add more log items -->
                </div>
            </div>

            <!-- Security Alerts -->
            <div class="card p-6 rounded-lg shadow-md">
                <h2 class="card-title text-xl font-semibold mb-2">Security Alerts</h2>
                <div class="text-sm text-gray-300">
                    <p>Unauthorized access detected.</p>
                    <p>Firewall breached.</p>
                    <!-- Add more alerts -->
                </div>
            </div>

            <!-- Logs -->
            <div class="card p-6 rounded-lg shadow-md">
                <h2 class="card-title text-xl font-semibold mb-2">Logs</h2>
                <ul class="text-sm text-gray-300">
                    <li>Login attempt from unknown IP.</li>
                    <li>Failed login attempt: admin</li>
                    <li>Server maintenance scheduled for tomorrow.</li>
                    <li>Database backup completed successfully.</li>
                    <li>System update available. Please schedule downtime.</li>
                </ul>
            </div>


            <!-- Secret Details -->
            <div class="card p-6 rounded-lg shadow-md">
                <h2 class="card-title text-xl font-semibold mb-2">Secret Details</h2>
                <div class="text-sm text-gray-300">
                    <p>Access codes: <strong>457832, 689421</strong></p>
                    <p>Encryption key: <strong>0x1F3AB2</strong></p>

                    <div>
                        <h3>Important Reminders:</h3>
                        <ul>
                            <li>Access codes are case-sensitive.</li>
                            <li>Use the encryption key to decode secure messages.</li>
                            <li>Keep this information confidential and secure.</li>
                        </ul>
                    </div>

                    <div>
                        <h3>Instructions:</h3>
                        <ol>
                            <li>Enter the access code when prompted.</li>
                            <li>Use the encryption key in the decryption process.</li>
                            <li>Follow security protocols for data protection.</li>
                        </ol>
                    </div>
                </div>
            </div>

            <!-- Download Images -->
            <div class="card p-6 rounded-lg shadow-md">
                <h2 class="card-title text-xl font-semibold mb-2">Download </h2>
                <div class="text-sm text-gray-300">
                    <p>Click below to download images:</p>
                    <button class="bg-gray-800 text-white py-2 px-4 rounded-lg mt-2">Download</button>
                </div>
            </div>

            <!-- About -->
            <div class="card p-6 rounded-lg shadow-md">
                <h2 class="card-title text-xl font-semibold mb-2">About</h2>
                <div class="text-sm text-gray-300">
                    <p>This dashboard is designed for hackers to monitor network activity, system logs, and security
                        alerts.</p>
                    <p>It provides access to secret details and instructions for secure communication.</p>
                </div>
            </div>

            <div class="card p-6 rounded-lg shadow-md">
                <h2 class="card-title text-xl font-semibold mb-2">About</h2>
                <div class="text-sm text-gray-300">
                    <p>This dashboard is designed for hackers to monitor network activity, system logs, and security
                        alerts.</p>
                    <p>It provides access to secret details and instructions for secure communication.</p>
                </div>
            </div> <div class="card p-6 rounded-lg shadow-md">
                <h2 class="card-title text-xl font-semibold mb-2">About</h2>
                <div class="text-sm text-gray-300">
                    <p>This dashboard is designed for hackers to monitor network activity, system logs, and security
                        alerts.</p>
                    <p>It provides access to secret details and instructions for secure communication.</p>
                </div>
            </div> <div class="card p-6 rounded-lg shadow-md">
                <h2 class="card-title text-xl font-semibold mb-2">About</h2>
                <div class="text-sm text-gray-300">
                    <p>This dashboard is designed for hackers to monitor network activity, system logs, and security
                        alerts.</p>
                    <p>It provides access to secret details and instructions for secure communication.</p>
                </div>
            </div> <div class="card p-6 rounded-lg shadow-md">
                <h2 class="card-title text-xl font-semibold mb-2">About</h2>
                <div class="text-sm text-gray-300">
                    <p>This dashboard is designed for hackers to monitor network activity, system logs, and security
                        alerts.</p>
                    <p>It provides access to secret details and instructions for secure communication.</p>
                </div>
            </div> <div class="card p-6 rounded-lg shadow-md">
                <h2 class="card-title text-xl font-semibold mb-2">About</h2>
                <div class="text-sm text-gray-300">
                    <p>This dashboard is designed for hackers to monitor network activity, system logs, and security
                        alerts.</p>
                    <p>It provides access to secret details and instructions for secure communication.</p>
                </div>
            </div> <div class="card p-6 rounded-lg shadow-md">
                <h2 class="card-title text-xl font-semibold mb-2">About</h2>
                <div class="text-sm text-gray-300">
                    <p>This dashboard is designed for hackers to monitor network activity, system logs, and security
                        alerts.</p>
                    <p>It provides access to secret details and instructions for secure communication.</p>
                </div>
            </div> <div class="card p-6 rounded-lg shadow-md">
                <h2 class="card-title text-xl font-semibold mb-2">About</h2>
                <div class="text-sm text-gray-300">
                    <p>This dashboard is designed for hackers to monitor network activity, system logs, and security
                        alerts.</p>
                    <p>It provides access to secret details and instructions for secure communication.</p>
                </div>
            </div> <div class="card p-6 rounded-lg shadow-md">
                <h2 class="card-title text-xl font-semibold mb-2">About</h2>
                <div class="text-sm text-gray-300">
                    <p>This dashboard is designed for hackers to monitor network activity, system logs, and security
                        alerts.</p>
                    <p>It provides access to secret details and instructions for secure communication.</p>
                </div>
            </div>

        </div>
    </div>

    <!-- Footer -->
    <footer class="footer py-4">
        <div class="container mx-auto text-center">
            <p class="text-gray-400">© 2024 Dashboard. All rights reserved.</p>
        </div>
    </footer>

    <!-- Binary numbers animation -->
    <div class="binary-numbers">
        <span>01010100 01101000 01100101 00100000 01010011 01101011 01111001 00100000 01001001 01110011 00100000
            01010100 01101000 01100101 00100000 01001100 01101001 01101101 01101001 01110100</span>
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.0/dist/chart.min.js"></script>
    <script>
        // Simulated system logs
        setInterval(function () {
            const logsContainer = document.querySelector('.system-log');
            const logItem = document.createElement('div');
            logItem.textContent = '[INFO] System initialized';
            logItem.classList.add('system-log-item');
            logsContainer.appendChild(logItem);
            logsContainer.scrollTop = logsContainer.scrollHeight;
        }, 3000); // Add a new log item every 3 seconds
    </script>

</body>

</html>
