-- 資料表結構 `students`
--
CREATE TABLE `laravel_db` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(32) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `chindes` int(10) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_520_ci;

INSERT INTO
  `users` (
    `id`,
    `name`,
    `email`,
    `email_verified_at`,
    `password`,
    `created_at`,
    `updated_at`
  )
VALUES
  (
    '4',
    '陳佑青-4',
    'yo76317-4@yahoo.com.tw',
    NULL,
    '123',
    NULL,
    NULL
  ),
    (
    '5',
    '陳佑青-5',
    'yo76317-5@yahoo.com.tw',
    NULL,
    '123',
    NULL,
    NULL
  ),
    (
    '6',
    '陳佑青-6',
    'yo76317-6@yahoo.com.tw',
    NULL,
    '123',
    NULL,
    NULL
  );