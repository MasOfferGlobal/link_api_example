# MasOffer Dynamic Link Template

    GET https://go.masoffer.net/v0/{offer}/{publisher}/?aff_sub1={aff_sub1}
        &aff_sub2={aff_sub2}&aff_sub3={aff_sub3}&aff_sub4={aff_sub4}&go={go}

## Mô tả
Cầu trúc link ghi nhận cho MasOffer
***

## Parameters

- **offer** _(required)_ — Id của shop.
- **publisher** _(required)_ — Id của publisher.
- **go** _(required)_ — Url của trang đích (đã được mã hóa).
- **aff_sub1** _(optional)_ — Nguồn chiến dịch, ví dụ: google, facebook.
- **aff_sub2** _(optional)_ — Cách tiếp thị , ví dụ: cpc, banner, email.
- **aff_sub3** _(optional)_ — Tên chiến dịch, ví dụ: chương trình xxx, sự kiện xxx.
- **aff_sub4** _(optional)_ — Nội dung chiến dịch để phân biệt các quảng cáo.

***

## Example
**Request**

    GET https://go.masoffer.net/v0/adayroi/username/?aff_sub1=FB_ads
        &aff_sub2=banner&aff_sub3=khuyen_mai_tet&go=https%3A%2F%2Fwww.adayroi.com%2F

## Các shop sử dụng được dynamic link:

Chi tiết xem thêm ở [https://pub.masoffer.com](https://pub.masoffer.com)