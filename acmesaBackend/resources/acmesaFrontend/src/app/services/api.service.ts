import { Injectable, OnInit } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Observable } from 'rxjs';
import { map, tap, catchError, finalize } from 'rxjs/operators';
import { environment } from '../../environments/environment';

@Injectable({
	providedIn: 'root'
})
export class ApiService implements OnInit {

	constructor(private http: HttpClient,) { }

	ngOnInit() {

	}

	/**
	* GET Http Request
	*
	* @param {string} path
	* @param {HttpParams} params
	* @returns {Observable<any>}
	*/
	get(path: string, params: any = {}): Observable<any> {
		return this.http.get<any>(`${environment.api_url}${path}`, params)
			.pipe(tap(data => { }));
	}

	/**
	 * PUT Http Request
	 *
	 * @param {string} path
	 * @param {Object} body
	 * @returns {Observable<any>}
	 */
	put(path: string, body: any): Observable<any> {
		return this.http.put<any>(`${environment.api_url}${path}`, body)
			.pipe(tap(data => { }));
	}

	/**
	 * POST Http Request
	 *
	 * @param {string} path
	 * @param {object} body
	 * @returns {Observable<any>}
	 */
	post(path: string, body: object): Observable<any> {
		return this.http.post<any>(`${environment.api_url}${path}`, body)
			.pipe(tap(data => { }));
	}

	/**
	 * DELETE Http Request
	 *
	 * @param {string} path
	 * @returns {Observable<any>}
	 */
	delete(path: string, body: any): Observable<any> {
		return this.http.delete<any>(`${environment.api_url}${path}`, body)
			.pipe(tap(data => { }));
	}

}
