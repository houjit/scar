<?php
/*
 �������Ȩ����������,��Ͷ��ʹ��֮ǰע���ȡ���
 ���ߣ��������հ�˹�Ƽ����޹�˾
 ��Ŀ��simcms_��1.0
 �绰��010-58480317
 Q  Q: 228971357
 ��ַ��http://www.simcms.net
 simcms.net����ȫ��Ȩ��������ط��ɺ͹��ʹ�Լ����������Ƿ��޸ġ�ת�ء�ɢ��������������Ӯ����Ϊ��������ɾ����Ȩ������
*/
if (!defined('APP_IN')) exit('Access Denied');

$id = isset($_GET['id']) ? intval($_GET['id']) : showmsg('ȱ��ID',-1);
$rs = $db->query_unbuffered("update ".$db->tb_prefix."news set n_hits = n_hits+1 where n_id=".$id);
$data = $db->row_select_one('news',"n_id=".$id);
echo "document.write('".$data['n_hits']."');";
?>