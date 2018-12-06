<?php

namespace Modules\Icommerce\Repositories\Eloquent;

use Modules\Icommerce\Repositories\WishlistRepository;
use Modules\Core\Repositories\Eloquent\EloquentBaseRepository;

class EloquentWishlistRepository extends EloquentBaseRepository implements WishlistRepository
{
  public function index($params)
  {
    // INITIALIZE QUERY
    $query = $this->model->query();
  
    // RELATIONSHIPS
    $defaultInclude = ['product'];
    $query->with(array_merge($defaultInclude, $params->include));
  
    // FILTERS
    if($params->filter) {
      $filter = $params->filter;
  
      //add filter by search
      if (isset($filter->search)) {
        //find search in columns
        $query->where('id', 'like', '%' . $filter->search . '%')
          ->orWhere('updated_at', 'like', '%' . $filter->search . '%')
          ->orWhere('created_at', 'like', '%' . $filter->search . '%');
      }
  
      //add filter by user
      if (isset($filter->user)) {
        $query->where('user_id', $filter->user);
      }
    }
    
    // FIELDS
    if ($params->fields) {
      $query->select($params->fields);
    }
  
    // PAGE & TAKE
    //Return request with pagination
    if ($params->page) {
      $params->take ? true : $params->take = 12; //If no specific take, query take 12 for default
      return $query->paginate($params->take);
    }
    
    //Return request without pagination
    if (!$params->page) {
      $params->take ? $query->take($params->take) : false; //if request to take a limit
      return $query->get();
    }
  }
  
  public function show($criteria, $params)
  {
    // INITIALIZE QUERY
    $query = $this->model->query();
    
    $query->where('id', $criteria);
    
    // RELATIONSHIPS
    $includeDefault = ['products'];
    $query->with(array_merge($includeDefault, $params->include));
    
    // FIELDS
    if ($params->fields) {
      $query->select($params->fields);
    }
    return $query->first();
    
  }
}
