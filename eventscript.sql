CREATE EVENT delete_old_rows
ON SCHEDULE EVERY 5 MINUTE
DO
    DELETE FROM forgot_password
    WHERE created_at < NOW() - INTERVAL 10 MINUTE;