# 'ORDER BY id DESC' ile 'id' değerine göre çoktan aza doğru olacak şekilde sıralama yapıyoruz
# 'LIMIT 10' ile son 10 veriyi çekmiş oluyoruz.

<tbody>
  <?php
    foreach (cok("SELECT * FROM items INNER JOIN markalar ON markalar.marka_id=items.item_marka ORDER BY id DESC LIMIT 10") as $key => $items): ?>
        <tr>
            <td><?= $items['item_name'] ?></td>
            <td class="copyMe" onclick="myFunction()"><?= $items['item_barkod'] ?> &nbsp;<i class="mdi mdi-content-copy"></i></td>
            <td><?= $items['marka_ad'] ?></td>
            <td><?= $items['item_maliyet'] ?></td>
            <td><?= $items['item_t'] ?></td>
            <td><?= $items['item_h'] ?></td>
            <td><?= $items['item_n'] ?></td>
            <td><?= $items['item_g'] ?></td>
            <td><?= $items['item_stok'] ?></td>
            <td>
            <a href="edit-urun.php?id=<?=$items['id']?>" class="btn btn-inverse-warning">Düzenle</a>
            <a href="index.php?sil=delete&id=<?=$items['id']?>" class="btn btn-inverse-danger">Sil</a></td>
        </tr>
    <?php endforeach ?>
</tbody>
