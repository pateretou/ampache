<?php
/* vim:set softtabstop=4 shiftwidth=4 expandtab: */
/**
 *
 * LICENSE: GNU General Public License, version 2 (GPLv2)
 * Copyright 2001 - 2013 Ampache.org
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License v2
 * as published by the Free Software Foundation.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
 *
 */
?>
<td class="cel_add">
    <?php echo Ajax::button('?action=basket&type=video&id=' . $video->id,'add', T_('Add'),'add_video_' . $video->id); ?>
</td>
<td class="cel_title"><?php echo $video->f_title; ?></td>
<td class="cel_codec"><?php echo $video->f_codec; ?></td>
<td class="cel_resolution"><?php echo $video->f_resolution; ?></td>
<td class="cel_length"><?php echo $video->f_length; ?></td>
<td class="cel_tags"><?php $video->f_tags; ?></td>
<td class="cel_action">
<?php if (Access::check_function('download')) { ?>
    <a href="<?php echo Config::get('web_path'); ?>/stream.php?action=download&type=video&oid=<?php echo $video->id; ?>"><?php echo UI::get_icon('download', T_('Download')); ?></a>
<?php } ?>
</td>
