# Sử dụng image chính thức của WordPress
FROM wordpress:latest

# Sao chép các theme tùy chỉnh vào thư mục themes của WordPress
COPY ./wp-content /var/www/html/wp-content/themes/

# Chạy lệnh cập nhật và cài đặt gói bổ sung nếu cần
RUN apt-get update && apt-get install -y curl
