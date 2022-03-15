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
    '1',
    '陳佑青-1',
    'yo76317-1@yahoo.com.tw',
    NULL,
    '123',
    NULL,
    NULL
  );