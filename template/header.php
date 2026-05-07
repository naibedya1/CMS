<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title><?php echo $pageTitle ?? 'CMS'; ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <nav class="w-full bg-gray-200 flex justify-between px-10 py-7">
        <a href="./index.php" class="text-xl font-semibold">Complaint Management System</a>
        <ul class="flex">
        <?php if (isset($_SESSION['user_id'])): ?>
                <li><a href="logout.php" class="text-red-500">Logout</a></li>
            <?php endif; ?>
        </ul>
    </nav>

<div class="bg-gray-100 min-h-screen">
    