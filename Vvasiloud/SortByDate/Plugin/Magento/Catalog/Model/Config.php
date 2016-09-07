<?php 
/**
 * A Magento 2 module named Vvasiloud/SortByDate
 * Copyright (C) 2016  
 * 
 * This file is part of Vvasiloud/SortByDate.
 * 
 * Vvasiloud/SortByDate is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 */

namespace Vvasiloud\SortByDate\Plugin\Magento\Catalog\Model;
 
 
class Config {

    /**
     * Retrieve Attributes Used for Sort by as array
     * key = code, value = name
     *
     * @return array
     */
	public function afterGetAttributeUsedForSortByArray(
		\Magento\Catalog\Model\Config $subject,
		$options
	){
		$options['created_at'] = __('New');
		return $options;	
	}
}
